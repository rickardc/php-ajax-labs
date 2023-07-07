
// class
class person {
    constructor(fname, lname, email) {
        this.fname = fname;
        this.lname = lname;
        this.email = email;
    }
    print() {
        console.log(`name=${this.fname}.' '${this.lname} , email=${this.email}`);
    }
}

function write(person) {
    // write to the table
    // get table
    const table = document.getElementById("table");
    // insert row
    const row = table.insertRow(-1);
    
    // add data to the new row
    const cell1 = row.insertCell(0);
    cell1.innerHTML = person.fname;
    cell1.style.color = "green";
    boldOnClick(cell1);

    const cell2 = row.insertCell(1);
    cell2.innerHTML = person.lname;
    cell2.style.color = "green";
    boldOnClick(cell2);

    const cell3 = row.insertCell(2);
    cell3.innerHTML = person.email;
    cell3.style.color = "green";
    boldOnClick(cell3);
}

function addToTable() {
    // get data from the form
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const email = document.getElementById("email").value;

    // create a person object
    const p = new person(fname, lname, email);
    // add the person to the table
    write(p);
}



function boldOnClick(cell) {

    
        cell.addEventListener("click", function() {
            console.log("clicked");
            console.log(this.style.fontWeight);
            // change to bold
            if (this.style.fontWeight == "bold"){
                this.style.fontWeight = "normal";
            } else if (this.style.fontWeight == "normal" || this.style.fontWeight == ""){
                this.style.fontWeight = "bold";
            }
        });
    }


function main() {

    var table = document.getElementById("table");

    var cells = table.getElementsByTagName("td");

    for (var i = 0; i < cells.length; i++) {
        boldOnClick(cells[i]);
    }

}

window.onload = main;