var count = 2;
function addTable() {
    var check = document.getElementById("my_table");
    if (check !== null) {
        alert("Table already exists");
        return;
    }
    var table = document.createElement("table");// <table></table>
    table.setAttribute("id", "my_table");// <table id='my_table'></table>

    var tr1 = document.createElement("tr");// <tr></tr>
    var th1 = document.createElement("th");//<th></th>
    th1.innerHTML = "No"; //<th>Number</th>
    var th2 = document.createElement("th");
    th2.innerHTML = "Message"; // <th>Message</th>
    tr1.appendChild(th1);
    /*
    <tr>
        <th>Number</th>
    </tr>
    */ 
    tr1.appendChild(th2);
    /*
    <tr>
        <th>Number</th>
        <th>Message</th>
    </tr>
    */ 
    table.appendChild(tr1);
    /*
    <table id='my_table'>
        <tr>
            <th>Number</th>
            <th>Message</th>
        </tr>
    </table>
    */


    var tr2 = document.createElement("tr");
    var td11 = document.createElement("td");
    td11.innerHTML = "1";
    tr2.appendChild(td11);
    var td12 = document.createElement("td");
    td12.innerHTML = "Hi";
    tr2.appendChild(td12);
    table.appendChild(tr2);


    var tr3 = document.createElement("tr");
    var td21 = document.createElement("td");
    td21.innerHTML = "2";
    tr3.appendChild(td21);
    var td22 = document.createElement("td");
    td22.innerHTML = "I'm XuanHaj";
    tr3.appendChild(td22);
    table.appendChild(tr3);
    //TAO 2 HANG DAU TIEN

    document.getElementById("root").appendChild(table);

    document.getElementById("bt1").disabled = false;
    document.getElementById("bt2").disabled = false;
    showAddTableSuccessToast();
}

function addRow() {
    count++;
    var table = document.getElementById("my_table");
    var mess = document.getElementById("mess");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = "" + count;
    cell2.innerHTML = mess.value;
    mess.value = "";
    showAddSuccessToast();
}

function deleteRow() {
    var table = document.getElementById("my_table");
    var num = document.getElementById("num").value;
    //check num is number
    if (isNaN(num) || num === "" || num <=0) {
        alert("Please enter a number");
        return;
    }
    // check luc nhap vao hang 2
    var length = table.rows.length;
    if (num >= length) {
        document.getElementById("num").value = "";
        showErrorToast();
        return;
    }

    table.deleteRow(num);
    document.getElementById("num").value = "";
    var length = table.rows.length;
    if (length === 1) {
        document.getElementById("bt1").disabled = true;
        document.getElementById("bt2").disabled = true;
        table.setAttribute("id", "");
        table.deleteRow(0);
    }
    for (var i = num; i < length; i++) {
        table.rows[i].cells[0].innerHTML = "" + i;
    }
    // khi xoa 1 hang bat ki se sap xep lai thu tu trong cot Number
    showDeleteSuccessToast();
    count--;
}


function showAddTableSuccessToast() {
    toast({
        title: "Sucess",
        message: "Add table successfully.",
        type: "success",
        duration: 1000
    });
}

function showDeleteSuccessToast() {
    toast({
        title: "Sucess",
        message: "Delete row successfully.",
        type: "success",
        duration: 1000
    });
}

function showAddSuccessToast() {
    toast({
        title: "Sucessfully!",
        message: "Add row successfully.",
        type: "success",
        duration: 1000
    });
}

function showErrorToast() {
    toast({
        title: "Failed!",
        message: "Row number is not exist.",
        type: "error",
        duration: 2000
    });
}
// Toast function
function toast({ title = "", message = "", type = "info", duration = 3000 }) {
    const main = document.getElementById("toast");
    if (main) {
        const toast = document.createElement("div");

        // Auto remove toast
        const autoRemoveId = setTimeout(function () {
            main.removeChild(toast);
        }, duration + 1000);

        // Remove toast when clicked
        toast.onclick = function (e) {
            if (e.target.closest(".toast__close")) {
                main.removeChild(toast);
                clearTimeout(autoRemoveId);
            }
        };

        const icons = {
            success: "fas fa-check-circle",
            info: "fas fa-info-circle",
            warning: "fas fa-exclamation-circle",
            error: "fas fa-exclamation-circle"
        };
        const icon = icons[type];
        const delay = (duration / 1000).toFixed(2);

        toast.classList.add("toast", `toast--${type}`);
        toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

        toast.innerHTML = `
                      <div class="toast__icon">
                          <i class="${icon}"></i>
                      </div>
                      <div class="toast__body">
                          <h3 class="toast__title">${title}</h3>
                          <p class="toast__msg">${message}</p>
                      </div>
                      <div class="toast__close">
                          <i class="fas fa-times"></i>
                      </div>
                  `;
        main.appendChild(toast);
    }
}
