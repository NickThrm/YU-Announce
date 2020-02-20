console.log("eddd");

var announcements = [["img/post4.jpg", "Title1", "ExDateStart1", "ExDateEnd1", "Description1", ["Soccer", "Art", "Music"]],
["img/post5.jpg", "Title2", "ExDateStart2", "ExDateEnd2", "Description2", ["CS", "Art"]],
["img/post6.jpg", "Title3", "ExDateStart3", "ExDateEnd3", "Description3", ["CS", "Art"]]];
tagIndex = announcements[0].length - 1;
//standardize format for post information, tag is always last index
function searchTag(myArray, myTag){
    listOfTagged = [];
    var i;
    for (i = 0; i < myArray.length; i++){
        if (myArray[i][tagIndex].includes(myTag)){
            listOfTagged.push(myArray[i]);
        }
    }
    return listOfTagged;
    
}
function generatePost(myArray){
	//inserts html for posts at a given html element with Id "insertId"
	//not necessary
	var i, j;
	// var insertAt = document.getElementbyId(insertId);
	for (i = 0; i < myArray.length; i++){
		// for (j = 0; j < myArray[i].length; j++){
      var div = document.createElement("div");

			// if (j == 0){
        let appender = document.getElementById("appender");
        // div.setAttribute("src", myArray[i][j]);
        div.innerHTML = `<div class="post">
        <img class="post-img" src="${myArray[i][0]}" alt="Avatar" >
          <div class="card-container">
          <h4><b>${myArray[i][1]}</b></h4> 
          <p>${myArray[i][4]}</p> 
          </div>
        </div>`;
				// image.setAttribute("width", "304");
  				// image.setAttribute("height", "228");
  				appender.appendChild(div);
			// }
			// else if (j == 1){
			// 	// var title = document.createElement("p");
      //   //var node = document.createTextNode(myArray[j])
      //   // title.innerHTML = myArray[i][j];
      //   // document.body.appendChild(title);
      //   div.innerHTML = `<p>${myArray[i][j]}</p>`;
			// }
			// else if (j == 2){//ISO Date	"2015-03-25" (The International Standard)
			// 	var dateStart = document.createElement("p");
			// 	dateStart.innerHtml = myArray[i][j];
			// 	document.body.appendChild(dateStart);
			// }
			// else if (j == 3){//ISO Date	"2015-03-25" (The International Standard)
			// 	var dateEnd = document.createElement("p");
			// 	dateEnd.innerHtml = myArray[i][j];
			// 	document.body.appendChild(dateEnd);
			// }
			// else if (j == 4){
			// 	var description = document.createElement("p");
			// 	description.innerHtml = myArray[i][j];
			// 	document.body.appendChild(description);
			// }
			// else if (j == 5){
      //   var tag = document.createElement("p");
      //   tag.innerHtml = myArray[i][j];
			// 	document.body.appendChild(tag);
			// }
		// }
	}
}

function sort(myTag){
  var taggedPosts = searchTag(announcements, myTag);
  document.getElementById('posts').innerHTML = '<div id="appender"></div>';
  console.log(taggedPosts);
  generatePost(taggedPosts);
}


generatePost(announcements);