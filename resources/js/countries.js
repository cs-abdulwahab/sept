const countryList = require('country-list');

console.log( countryList.getNames() );


var list = document.getElementById("projectSelectorDropdown");
for (var i = 0; i < 100; i++){
    var opt = "aaa";
    var li = document.createElement("li");
    var link = document.createElement("a");
    var text = document.createTextNode(opt);
    link.appendChild(text);
    link.href = "#";
    li.appendChild(link);
    list.appendChild(li);
}

console.log('end of file countries');