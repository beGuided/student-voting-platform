jQuery(document).ready(function() {
        jQuery('.vote_btn').on('click', function() {
            if ($(this).siblings(".candidate_select").val() == "") {
                alert('You have not selected a candidate. Pleae select a candidate!')
            } else if ($(this).siblings(".candidate_select").val() !== "") {
                $(this).attr('disabled', true)
                $(this).siblings('.candidate_select').attr('disabled', true)
                $(this).text($(this).text().replace("Vote", "Voted"))

            }

        })

    })
    //Get the button:
mybutton = document.getElementById("myBtn");
mynav = document.querySelector(".mynav");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        mynav.classList.add("nav-bg");
    } else {
        mynav.classList.remove("nav-bg");
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}