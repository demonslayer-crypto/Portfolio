
// function goTo()
// {
//     location.href = document.getElementById('search').value;
// }
function link() {
    var link_s = document.getElementById('search').value;}

    function goTo()
{
    location.href = document.getElementById('https://www.flipkart.com/').value;
}

<input type='text' id='link_id'>
<input type='button' id='link' value='Search' onClick='javascript:goTo()'> 

<script type="text/javascript">
       document.getElementById("btn").addEventListener("click", function(){
            window.location = document.getElementById('search').value
       });
 </script>
 
 <input type="text" id="link-box"/>
  <input type="button" id="search-button" value="Search" 
         onclick="window.location = document.getElementById('link-box').value;"/>