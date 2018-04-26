// Objects
var tutor = {
  "name": "Ervin",
  "school": "Science",
  "courses": {
    "teaching": [
      {
        "code": "COSC2413",
        "name": "Web Programming"
      },
      {
        "code": "COSC2473",
        "name": "Introduction to Computer Systems and Platform Technologies" 
      },
      {
        "code": "COSC2737",
        "name": "IT Infrastructure and Security"
      }
    ]
  }
}

console.log(tutor.name)
console.log(tutor.courses)
console.log(tutor.courses.teaching);
console.log(tutor.courses.teaching[0].name);



// Regular expressions
var regex = /[A-Za-z]{6,}/g;
var data = "ervin"

if (regex.test(data)) {
  return true;
} else {
  return false;
}
