// https://www.w3schools.com/jquery/trysel.asp?password=password&rr=on

//.dblclick() - double click
//.click() - single click
//on() - on
//.hover() - hover
//.focus() - focus
//.blur() - blur
//.select() - select
//.submit() - submit
//.keydown() - keydown
//.keyup() - keyup
//.keypress() - keypress
//mouseenter() - mouseenter
//mouseleave() - mouseleave
//mousemove() - mousemove
//mouseover() - mouseover
//mouseout() - mouseout
//mousedown() - mousedown
//mouseup() - mouseup
//change() - change
//hover() - hover
//select() - select
//input() - input
//focusin() - focusin
//focusout() - focusout
//scroll() - scroll
//resize() - resize
//load() - load
//unload() - unload
//error() - error
//contextmenu() - contextmenu
//selectstart() - selectstart
//selectend() - selectend
//select() - select
//touchstart() - touchstart
//touchmove() - touchmove
//touchend() - touchend
//touchcancel() - touchcancel


// $(document).ready(function(){
        //     $("#name").hide()
        //     $("#submit").hide()
        // })

        $(document).ready(function(){
            $("#clickMe").click(function(){
                $("a[target!='target']").hide()
            })

            $("#Show").click(function(){
                $("a[target!='target']").show()
            })
        })


        $(document).ready(function(){
            $("#sub").click(function(){
                $("p").hide()
            })
        })

        $(document).ready(function(){
            $("button").click(function(){
                $("p").show()
            })
        })
        
        //forms
        $(document).ready(function(){
            $("#submit").click(function(event){
                event.preventDefault(); // prevent form submission
                var name = $("#name").val();
                alert("Hello " + name);
            });
        });
        //on function
        $(document).ready(function(){
            $("h1").on({
                mouseenter: function(){
                    $("h1").css("background-color", "pink");
                },
                mouseleave: function(){
                    $("h1").css("background-color", "lightgray");
                },
                click: function(){
                    $("h1").css("background-color", "lime");
                },

                dblclick: function(){
                    $("h1").css("background-color", "lightblue");
                }

            })
        })


