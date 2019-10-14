import $ from 'jquery';
export function Form(form) {
    var self = this;
    this.controls = [];
    this.form = form;
    this.subscriptions = [];
    this.submitButton = $(form).find('button');

    [].forEach.call($(form).find('input, textarea'), function (input) {
        self.controls.push(new Input(input, self));
    });

    form.onkeydown = function (e) {
        if (e.keyCode === 13) {
            form.onsubmit(e);
        }
    };

    form.onchange = function () {
        var errors = self.checkOnErrors();
        errors ? self.submitButton.attr('disabled', true) : self.submitButton.removeAttr('disabled');
    };

    form.oninput = function () {
        var errors = self.checkOnErrors();
        errors ? self.submitButton.attr('disabled', true) : self.submitButton.removeAttr('disabled');
    };

    form.onsubmit = function (e) {
        e.preventDefault();
        var focusState = false;

        self.controls.forEach(function (ctrl) {
            if (!focusState) {
                ctrl.input.focus();
                if (!ctrl.validate()) {
                    focusState = true;
                }
            }
        });

        var errors = self.checkOnErrors();

        //console.log(errors);

        if (errors === 0) {
            self.subscriptions.forEach(function (fn) {
                //console.log(self);
                fn.call(self, self.getValue())
            });
            self.controls.forEach(function (ctrl) {
                ctrl.input.value = '';
                ctrl.clear();
            })
        }
    };
};

Form.prototype.checkOnErrors = function () {
    return this.controls.reduce(function (a, b) {
        b = b.valid ? 0 : 1;
        return a + b;
    }, 0);
};

Form.prototype.validate = function () {
    this.controls.forEach(function (ctrl) {
        ctrl.validate()
    });
};

Form.prototype.onSubmit = function (fn) {
    this.subscriptions.push(fn);
};

Form.prototype.getValue = function (fn) {
    var obj = {};

    this.controls.forEach(function (ctrl) {
        obj[ctrl.name] = ctrl.value;
    });

    return obj;
};


function Input(input, parent) {
    var self = this;
    this.parent = parent;
    this.msg = document.createElement('div');
    this.errorMsgText = input.getAttribute('data-error-msg') || 'Field is invalid';
    this.pattern = getPattern(input.getAttribute('data-pattern'));
    this.input = input;
    this.valid = false;
    this.value = input.value;
    this.name = input.getAttribute('name');

    if (input.type === 'file') {
        // const reader = new FileReader();
        this.value = [];
        this.appendFiles = [];
        input.onchange = function () {
            if (this.files.length) {
                input.parentNode.classList.add('uploaded');
                let fileName = document.createElement('div');
                fileName.innerHTML = this.files[0].name;
                self.appendFiles.push(fileName);
                self.value.push(this.files[0]);
                insertAfter(fileName, input);
                self.validate();
            }
        };
    } else {
        input.oninput = function () {
            self.value = this.type === 'checkbox' ? this.checked : this.value;
            self.validate();
        };
    }
}

Input.prototype.validate = function () {
    if (this.input.type === 'file') {
        this.value.length === 0 ? this.addError() : this.removeError();
    } else if (this.input.getAttribute('data-pass-confirm')) {
        if (this.input.value === this.parent.form.querySelector('[data-pattern="password"]').value) {
            this.removeError();
        } else {
            this.addError();
        }
    } else {
        if (this.pattern.test(this.input.value) || this.input.checked) {
            this.removeError();
        } else {
            this.addError();
        }
    }

    // this.removeError();
    return this.valid;
};

Input.prototype.addError = function () {
    this.input.classList.add('invalid');
    this.input.classList.remove('valid');
    this.msg.className = 'input-error-text';
    this.msg.innerHTML = this.errorMsgText;
    // this.input.appendChild(this.msg);
    insertAfter(this.msg, this.input);
    this.valid = false;
};

Input.prototype.removeError = function () {
    this.input.classList.add('valid');
    this.input.classList.remove('invalid');
    // this.msg.className = 'input-msg valid';
    // this.msg.innerHTML = 'This is correct email';
    if (this.msg.parentNode) {
        this.input.parentNode.removeChild(this.msg);
    }
    this.valid = true;
};

Input.prototype.clear = function () {
    this.input.classList.remove('valid');
    this.input.classList.remove('invalid');
    // this.input.removeChild(this.msg);
    if (this.input.checked) {
        this.input.checked = false;
    }
    if (this.input.type === 'file') {
        this.value = [];
        this.input.parentNode.classList.remove('uploaded');
        this.appendFiles.forEach(r => {
            this.input.parentNode.removeChild(r);
        });
        this.appendFiles = [];
    }
    this.valid = false;
};

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function getPattern(o) {
    var pattern;
    switch (o) {
        case 'email':
            pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            break;

        case 'login':
            pattern = /^(?=.*[A-Za-z0-9]$)[A-Za-z][A-Za-z\d.-]{0,19}$/;
            break;

        case 'password':
            pattern = /^(?=.*[a-zA-Z0-9])(?=.*).{7,40}$/;
            break;

        case 'checkbox':
            pattern = /^on$/;
            break;
        case 'number':
            pattern = /^[0-9.,]+$/;
            break;

        default:
            pattern = /^[\W\w]+$/;
            break;
    }

    return pattern;
}