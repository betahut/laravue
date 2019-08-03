export const loggy = (message, type) => {
    type = (typeof type) !== 'undefined' ? type : 0;
    var colors = [ "#cc0000", "#ff8800", "#2a9fd6", "#77b300" ];
    var type_str = ["ERROR", "WARNING", "INFO", "SUCCESS"];
    var str = [
        "%c " + type_str[type] + " %c" + message + " ",
        "margin:1px 0;padding:1px;background:#060606;color:" + colors[type],
        "margin:1px 0;padding:1px;background:#060606;color:#ffffff"
    ];
    console.log.apply(console, str);
}

export const regexCheck = (_value, _regex) => {
    return _regex.test(_value);
}