// JavaScript selectors

document.getElementsByTagName("p");
document.getElementsByClassName("price");
document.getElementById("ervin");

document.querySelectorAll("p");
document.querySelectorAll(".price").value;
document.querySelector("#ervin");

// Event listeners

// Number instance methods
// MDN docs - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number

const number = 51412;
console.log(number.toFixed(2));
console.log(
    number.toLocaleString("en-AU", { style: "currency", currency: "AUD" })
);
console.log(typeof "4");
console.log(typeof 4);
console.log(typeof NaN);
console.log(typeof "Ervin");
console.log(typeof null);

// Array instance methods and higher order functions
// MDN docs - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
// Array explorer by Sarah Drasner - https://sdras.github.io/array-explorer/

const tutors = ["Ervin", "Byron", "Trevor", "Adrian", "Edward", "Hai"];

// for (let i = 0; i < tutors.length; i++) {
//     console.log(tutors[i] + " is my web programming tutor.");
// }

// tutors.forEach(function(tutor) {
//     console.log(tutor + " is my web programming tutor.");
// });

// tutors.forEach(e => {
//     console.log(`${e} is my web programming tutor.`);
// });

// Template literals
// MDN docs - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals

const fName = "Ervin";
const lName = "Chua";
const age = "15";

const rubbish =
    "My name is " + fName + " " + lName + " and I'm " + age + " years old.";
const better = `My name is ${fName} ${lName} and I'm ${age} years old.`;
console.log(rubbish);
console.log(better);
