// both fizz buzz
// 3-fizz
// 5-buzz
 
function number(a){
    for(let b=0; b<=a; b++ ){
        if(b%3==0){
            document.write("fizz");
        }
        elseif(b%5==0){
            document.write("buzz");

        }
        elseif(b%3==0 && b%5==0){
            document.write("fizzBuzz");
        }
        
            document.write("Number is invaid");
        }
    }
