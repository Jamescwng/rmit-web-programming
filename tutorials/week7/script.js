// Selectors
document.getElementsByTagName("p");
document.getElementsByClassName("price");
document.getElementById("click");

// These are the same as above
document.querySelectorAll("p");
document.querySelectorAll(".price");
const button = document.querySelector("#click");



// Chaining event listeners on selectors
let counter = 0;
button.addEventListener("click", function() {
    counter++;
    console.log("You clicked me " + counter + " times.");
});



// Number instance methods
// MDN docs - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number
const number = 15989;

// Format number to two decimals
console.log(number.toFixed(2));
// Format number to local currency
console.log(number.toLocaleString("en-AU", { style: "currency", currency: "AUD" }));
// Some other examples
console.log(number.toLocaleString("de-DE", { style: "currency", currency: "EUR" }));
console.log(number.toLocaleString("jp-JP", { style: "currency", currency: "JPY" }));



// Array instance methods and higher order functions
// MDN docs - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
// Array explorer by Sarah Drasner - https://sdras.github.io/array-explorer/
const tutors = ["Ervin", "Byron", "Trevor", "Adrian", "Edward", "Hai"];

// Using for loop
for (let i = 0; i < tutors.length; i++) {
    console.log(tutors[i] + " is my web programming tutor.");
}

// Using forEach method
tutors.forEach(function(tutor) {
    console.log(tutor + " is my web programming tutor.");
});

// Using ES6 arrow functions with cheeky template literals
tutors.forEach(tutor => {
    console.log(`${tutor} is my web programming tutor.`);
});



// Template literals
// MDN docs - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals

const fName = "Ervin";
const lName = "Chua";
const age = 15;

const rubbish = "My name is " + fName + " " + lName + " and I'm " + age + " years old.";
const better = `My name is ${fName} ${lName} and I'm ${age} years old.`;

console.log(rubbish);
console.log(better);
