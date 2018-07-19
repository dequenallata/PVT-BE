import Axios from "axios";

export function moneyInputMaskAll() {
    document.querySelectorAll('input').forEach(element => {
        if (element.getAttribute('data-money') == "true") {
            Inputmask(moneyInputMask()).mask(element);
        }
    });
}
export function moneyInputMask() {
    return {
        alias: "numeric",
        groupSeparator: ",",
        autoGroup: true,
        digits: 2,
        digitsOptional: false,
        prefix: "Bs ",
        placeholder: "0"
    };
}
export function dateInputMask() {
    return {
        alias: "date",
        inputFormat: "dd/mm/yyyy",
    };
}
export function dateMonthYearInputMask() {
    return {
        alias: "mm/yyyy"
    };
}
export function monthYearInputMaskAll() {
    document.querySelectorAll('input').forEach(element => {
        
        if (element.getAttribute('data-month-year') == "true") {
            console.log(element);
            Inputmask(dateMonthYearInputMask()).mask(element);
        }
    });
}
export function parseMoney(value) {
    if (!value) {
        return 0;
    }
    if (typeof value === 'string'){
        let result = value.replace(/(Bs|\s+)/ig, ``);
        result = result.replace(/,/g, ``);
        return result;
    }
    return (typeof value === 'number') ? value : alert('error: parseMoney');
}

export function cellPhoneInputMaskAll() {
    document.querySelectorAll('input').forEach(element => {
        if (element.getAttribute('data-cell-phone') == "true") {
            Inputmask(cellPhoneInputMask()).mask(element);
        }
    });
}
export function cellPhoneInputMask() {
    return "(999)-99999";
}
export function phoneInputMaskAll() {
    document.querySelectorAll('input').forEach(element => {
        if (element.getAttribute('data-phone') == "true") {
            Inputmask(phoneInputMask()).mask(element);
        }
    });
}
export function phoneInputMask() {
    return "(9) 999-999";
}
export function getGender(value) {
    var gender = '';
    if (!value) {
        return gender;
    }
    switch (value.toUpperCase()) {
        case "M":
            gender = 'Masculino';
        break;
        case "F":
            gender = 'Femenino';
        break;
    }
    return gender;
}