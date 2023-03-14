function validate() {

	var projectName = document.getElementById("projectName").value;
    
	if(projectName === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback');
        x.style.display = "none";
    }


    var projectChain = document.getElementById("projectChain").value;
    
	if(projectChain === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback1').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback1');
        x.style.display = "none";
    }


    var totalSupply = document.getElementById("totalSupply").value;
    
	if(totalSupply === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback2').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback2');
        x.style.display = "none";
    }

    var projectDesc = document.getElementById("projectDesc").value;
    
	if(projectDesc === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback3').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback3');
        x.style.display = "none";
    } 

    var timeZone = document.getElementById("timeZone").value;
    
	if(timeZone === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback4').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback4');
        x.style.display = "none";
    } 

    var date = document.getElementById("date").value;
    
	if(date === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback5').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback5');
        x.style.display = "none";
    } 


    var time = document.getElementById("time").value;
    
	if(time === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback6').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback6');
        x.style.display = "none";
    } 

    var price = document.getElementById("price").value;
    
	if(price === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback7').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback7');
        x.style.display = "none";
    } 


    var founderEmail = document.getElementById("founderEmail").value;
    
	if(founderEmail === "") {
        let message = "You must enter valid input";
        document.getElementById('invalidfeedback8').innerHTML = message;
	}
    else
    {
        x = document.getElementById('invalidfeedback8');
        x.style.display = "none";
    } 
}
