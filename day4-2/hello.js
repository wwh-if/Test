var person = {
	'name':'张三',
	'gender': '男',
	'age': '18',
	'hair': '黑色'
};
var pname = person['name'];
console.log("姓名是" + pname);
person['hair'] = '棕黄色';
console.log("头发：" + person.hair);

for (var i in person) {
	console.log(i);
	console.log(person[i]);
}
