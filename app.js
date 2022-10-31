// ##############################
//Formen for at tjekke om email er blevet taget
function clean_input(){
    event.target.value = ""
    console.log('x')
    document.getElementById("p_email").style.display = "none"
  }

  async function is_email_available(){
    const frm = document.getElementById("signup_form")
    const conn = await fetch('api_is_email_available.php', {
      method : "POST",
      body : new FormData(frm)
    })
    if( ! conn.ok ){
         document.getElementById("p_email").style.display = "block"
    }
  }

// ##############################
// Dette er en funktion til at sweetalert kommer op med en kommentar med, man har lavet sin user.
function created_user(){
  Swal.fire(
    'Good job ',
    'You created a user!!',
    'success'
  )
}

// ##############################

function show_from_results(){
  const the_input = document.querySelector("#from-input")
  if( the_input.value.length > 0 ){
    document.querySelector("#from-results").style.display = "block"
    get_cities_from()
  }else{
    document.querySelector("#from-results").style.display = "none"
  }
  // document.querySelector("#from-results").style.display = "block"
}
 
// ##############################
function hide_from_results(){
  document.querySelector("#from-results").style.display = "none"
}

// ##############################
async function get_cities_from(){
  let conn = await fetch('api-get-cities-from.php')
  let data = await conn.json() // [{"city_name":"a"},{"city_name":"b"}]
  let div_city = `<div class="from-city" onclick="select_city()">
                    <img src="#img#">
                    <p>xxx</p>
                    <p>Population: #population#</p>
                  </div>`    
  let all_cities = ""
  
  //        0                1                    2
  // [{"city_name":"a"},{"city_name":"b"}, {"city_name":"c"}]
  for( let i = 0; i < data.length; i++ ){
    let city = data[i] // {"city_name":"a"}
    let city_name = city.city_name
    console.log(city_name)
    let copy_div_city = div_city
    copy_div_city = copy_div_city.replace("xxx", city_name)
    copy_div_city = copy_div_city.replace("#img#", city.city_image)
    copy_div_city = copy_div_city.replace("#population#", city.city_population)
    all_cities += copy_div_city
  }               
  console.log(data)
  document.querySelector("#from-results").insertAdjacentHTML("afterbegin", all_cities)
}

function select_city(){
  const city_name = event.target.querySelector(".from-city").innerText
  console.log(city_name)
  document.querySelector("#from_city").value = from-city
  document.querySelector("#from_results").style.display = "none"
  // document.querySelector("#from_results").classList.add('hide')
  document.querySelector("#from_results").innerHTML = ""
}





// Dette er for at få functionen op på "to"
function show_to_results(){
  const the_input = document.querySelector("#to-input")
  if( the_input.value.length > 0 ){
    document.querySelector("#to-results").style.display = "block"
    get_cities_to()
  }else{
    document.querySelector("#to-results").style.display = "none"
  }
  // document.querySelector("#from-results").style.display = "block"
}
 
// ##############################
function hide_to_results(){
  document.querySelector("#to-results").style.display = "none"
}

// ##############################
async function get_cities_to(){
  let conn = await fetch('api-get-cities-from.php')
  let data = await conn.json() // [{"city_name":"a"},{"city_name":"b"}]
  let div_city = `<div class="to-city">
                    <img src="#img#">
                    <p>xxx</p>
                    <p>Population: #population#</p>
                  </div>`    
  let all_cities = ""
  //        0                1                    2
  // [{"city_name":"a"},{"city_name":"b"}, {"city_name":"c"}]
  for( let i = 0; i < data.length; i++ ){
    let city = data[i] // {"city_name":"a"}
    let city_name = city.city_name
    console.log(city_name)
    let copy_div_city = div_city
    copy_div_city = copy_div_city.replace("xxx", city_name)
    copy_div_city = copy_div_city.replace("#img#", city.city_image)
    copy_div_city = copy_div_city.replace("#population#", city.city_population)
    all_cities += copy_div_city
  }               
  console.log(data)
  document.querySelector("#to-results").insertAdjacentHTML("afterbegin", all_cities)
}

// ##############################

async function delete_flight(){
  const frm = event.target.form
  console.log(frm)
  const conn = await fetch('api-delete-flight.php', {
    method : "POST",
    body : new FormData(frm)
  })
  const data = await conn.json()
  if( ! conn.ok ){
    // Sweet alert: ups... fligth not found
    console.log(data)
    return
  }
  // Success
  console.log(data)
  frm.remove()
}



