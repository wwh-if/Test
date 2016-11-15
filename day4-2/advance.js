var scope = "global";
function f() {
	var scope;
	console.log(scope);
	scope = "local";
	console.log(scope);
}
f();