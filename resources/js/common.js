const nl2br = (str) => {
var res = str.replace(/\r\n/g, "<br>");
res = res.replace(/(\n|\r)/g, "<br>");
return res;
}

// 関数を別ファイルで使い回すための記述
export { nl2br }