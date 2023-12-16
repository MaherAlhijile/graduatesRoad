if(document.getElementById("posts").childElementCount = 1){
    document.getElementById("emptyPosts").style.display="block"
}else{
    document.getElementById("emptyPosts").style.display="none"
}

function miniProfileInfo() {
    var miniProfile = document.getElementById("miniProfile");
    
}

function addNewPost(header, info) {
    var posts = document.getElementById("posts");
    var newDiv = document.createElement('div');
    newDiv.className = 'inner';
    var heading = document.createElement('h1');
    heading.innerHTML= header;
    heading.className="post-header";

    var text = document.createElement('p');
    text.innerHTML = info
    text.className="post-text";

    newDiv.appendChild(heading);
    newDiv.appendChild(text);
    posts.appendChild(newDiv);

    if(document.getElementById("posts").childElementCount < 2){
        document.getElementById("emptyPosts").style.display="block"
    }else{
        document.getElementById("emptyPosts").style.display="none"
    }
}


function openPopup() {
    // Display the overlay and popup
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
  }

  function openPopup2() {
    // Display the overlay and popup
    document.getElementById('overlay2').style.display = 'block';
    document.getElementById('popup2').style.display = 'block';
  }
 
 
  function closePopup() {
    // Hide the overlay and popup
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
  }

  function submitForm() {
    // Access form elements and retrieve values
    var author = document.getElementById('author').value;
    var authorEmail = document.getElementById('authorEmail').value;
    var postHeader = document.getElementById('postHeader').value;
    var postInfo = document.getElementById('postInfo').value;

    addNewPost(postHeader, postInfo)
    // Do something with the values (e.g., log them)
    console.log('Email:', author);
    console.log('Email:', authorEmail);
    console.log('Email:', postHeader);
    console.log('Email:', postInfo);

    // You can store these values in variables or perform further actions here
  }