
function Student(first, last, age, address , department) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.address = address;
    this.department= department;

	this.getFirstName = function() {
    return this.firstName;
	}
}

//new Array();

//add extra fuctoality after defiig the class even i buit classsess
Student.prototype.college = "PHCET";

Student.prototype.name = function() {
    return this.firstName + " " + this.lastName + " "+ this.age + " " + this.department + " "+this.address;
}

/*Student.prototype.getFirstName = function() {
    return this.firstName;
}*/

Student.prototype.setFirstName = function(firstName) {
    return this.firstName = firstName;
}
