var btn = document.getElementById("theme-button");
var link = document.getElementById("theme-link");
btn.addEventListener("click", function () { ChangeTheme();});

function ChangeTheme()  {
  let mainTheme = "main.css";
  let darkTheme = "dark.css";
  var currTheme = link.getAttribute("href");
  var theme = "";

  if (currTheme === mainTheme) {
    currTheme = darkTheme;
    theme = "dark";
  } else {
    currTheme = mainTheme;
    theme = "main";
  }
  link.setAttribute("href", currTheme);
  Save(theme);
}
function Save(theme) {
  var Request = new XMLHttpRequest();
  Request.open("GET","themes.php?theme=" + theme, true);
  Request.send();
}
