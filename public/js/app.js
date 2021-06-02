$(function() {
    let Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }

    var accordion = new Accordion($('#accordion'), false);
    var accordion2 = new Accordion($('#accordion2'), false);


});

    function ToggleButton(num){

    const containerDoers = document.querySelector(".INCLUDE-doers");
    const containerListeners = document.querySelector(".INCLUDE-listeners");

    if(num == 1){

        containerDoers.style.display="block";
        containerListeners.style.display = "none";
    }else
    if(num==2){
        containerDoers.style.display = "none";
        containerListeners.style.display = "block";
    }
    }

