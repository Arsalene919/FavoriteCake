function f(){
    document.getElementById("membershipFormLabel").innerHTML = "sign up"
    document.getElementById("test").style.display = 'none'
    document.getElementById("sign").style.display = 'block'
    document.getElementById("s_b").style.display = 'none'
}

function f2(){
    document.getElementById("test").style.display = 'block'
    document.getElementById("sign").style.display = 'none'
    document.getElementById("s_b").style.display = 'block'
}



// add to cart

let product = 0

let number = document.getElementById("add")

number.addEventListener('click', function(){
    product++
    document.getElementById("num").innerHTML = product
} 
)
