load = () => {
  var loader = document.getElementById("loader");
  var landing = document.getElementById("landing");
  var content = document.getElementById("content");
  var space = document.getElementById("space");
  var html = document.getElementsByTagName("html");
  var body = document.getElementById("body");
  const vw = window.innerWidth;
  const vh = window.innerHeight;
  const bh = body.clientHeight;

  var audio = document.getElementById("audio");
  var aBtn = document.getElementById("audio-btn");
  var aIcon = document.getElementById("audio-icon");

  // Loader Loaded
  setTimeout(() => {
    window.scrollTo(0, 0);
    aBtn.style.opacity = 0;
    loader.classList.add("loaded");
    landing.classList.add("loaded");
  }, 6000);

  //Random Number Function
  random = (min = 1, max = 10, precision = 1) => {
    return (
      Math.floor(
        Math.random() * (max * precision - min * precision) + 1 * precision
      ) /
      (1 * precision)
    );
  };

  //Creating Stars
  var tm = [];
  for (var i = 0; i < 50; i++) {
    const star = document.createElement("div");
    star.classList.add("star");
    const top = random(1, vh);
    const left = random(1, vw);
    star.style.top = top + "px";
    star.style.left = left + "px";
    space.appendChild(star);

    var randomnum = random(1, 10, 100);
    var r5 = random(1, 5);

    //Blinking Stars Timeline
    tm[i] = new TimelineMax({
      repeat: -1,
      repeatDelay: 1,
      duration: randomnum,
    })
      .to(star, {
        boxShadow: "0px 0px " + r5 + "px " + r5 + "px #fff",
      })
      .to(star, {
        boxShadow: "0px 0px 0px 0px #fff",
      });
  }

  //Open Letter
  var tl = [];
  document.getElementById("open").addEventListener(
    "click",
    (open = () => {
      //Timeline
      var tml = gsap.timeline({ duration: 1 });
      tml.defaultEase = "sine.in";
      content.style.visibillity = "visible";
      tml.to(content, 0, { opacity: 0 });
      tml.to(landing, { opacity: 0 });
      tml.to(space, { opacity: 0 });

      setTimeout(() => {
        //Reassamble Stars
        const star = document.querySelectorAll(".star");
        for (var i = 0; i < star.length; i++) {
          tm[i].kill();
          star[i].style.width = "1px";
          star[i].style.height = "1px";
          star[i].style.boxShadow = "none";
          const bodyh = random(1, bh);
          const left = random(1, vw);
          star[i].style.top = bodyh + "px";
          star[i].style.left = left - 100 + "px";

          // Raining Stars Timeline
          tl[i] = gsap.timeline({
            scrollTrigger: {
              trigger: star[i],
              start: "top center",
              end: "top center",
              toggleActions: "restart none restart none",
              duration: 1,
              ease: "none",
            },
          });
          tl[i].to(star[i], { scaleX: 120, x: 50, y: 50 });
          tl[i].to(star[i], { scaleX: 1, x: 100, y: 100 });
        }
      }, 2000);

      aBtn.addEventListener("click", stopAudio);
      playAudio();
      tml.to(aBtn, 1, { opacity: 1 });
      body.classList.add("loaded");
      tml.to(content, { opacity: 1 });
      tml.to(space, { opacity: 1 });
    })
  );

  //Freepik Attribution
  var img = document.querySelectorAll(".freepik");
  var alt = "Icons made by Freepik on www.flaticon.com";
  img.forEach((i) => {
    i.setAttribute("alt", alt);
    i.setAttribute("title", alt);
  });

  // Navigation Section Active
  // Scroll To
  var timesection = [];
  var scroll = document.querySelector(".scroll");
  var navbar = document.querySelectorAll("#navbar>li");
  navbar.forEach((nav, index) => {
    var attr = nav.getAttribute("data-target");
    var end = attr;
    switch (end) {
      case "text":
        end = "location";
        break;
      default:
        end = attr;
        break;
    }
    nav.addEventListener("click", scrollTo);
    timesection[index] = gsap.timeline({
      scrollTrigger: {
        trigger: "#" + attr,
        start: "top center",
        endTrigger: "#" + end,
        end: "bottom center",
        toggleClass: { targets: nav, className: "active" },
      },
    });
  });
  scroll.addEventListener("click", scrollTo);
  function scrollTo() {
    var attr = this.getAttribute("data-target");
    gsap.to(window, 1, { scrollTo: "#" + attr, ease: "power2.inOut" });
  }

  //Content Animation
  var arr = [
    {
      trigger: document.getElementById("bride"),
      x: -300,
      y: 0,
    },
    {
      trigger: document.getElementById("groom"),
      x: 300,
      y: 0,
    },
    {
      trigger: document.querySelector(".letterText"),
    },
    {
      trigger: document.querySelector(".hero"),
    },
    {
      trigger: document.querySelector(".akadCard"),
      x: -300,
      y: 0,
    },
    {
      trigger: document.querySelector(".resepsiCard"),
      x: 300,
      y: 0,
    },
    {
      trigger: document.querySelector(".countDown"),
      x: 0,
      y: 100,
    },
    {
      trigger: document.querySelector(".loc"),
    },
    {
      trigger: document.querySelector(".healthCard"),
    },
    {
      trigger: document.querySelector(".pray"),
      y: -200,
    },
    {
      trigger: document.querySelector(".wishes"),
      y: 200,
    },
    {
      trigger: document.querySelector(".thankyou"),
    },
  ];
  arr.forEach((ar) => {
    timeline(ar.trigger, ar.x, ar.y, ar.opacity);
  });
  var ts = [];
  function timeline(t, xX = 0, yY = 0, oP = true) {
    ts = gsap
      .timeline({
        scrollTrigger: {
          trigger: t,
          start: "top bottom",
          end: "center center",
          duration: 1,
          ease: "power3.inOut",
        },
      })
      .fromTo(
        t,
        { x: xX, y: yY, opacity: (oP = true ? 0 : 1) },
        { x: 0, y: 0, opacity: 1 }
      );
  }

  // Countdown
  var dDay = new Date("May 28, 2021 08:00:00").getTime();
  var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = dDay - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.querySelector(".day").innerHTML = days;
    document.querySelector(".hour").innerHTML = hours;
    document.querySelector(".minute").innerHTML = minutes;
    document.querySelector(".second").innerHTML = seconds;
  }, 1000);

  // AUDIO CONTROL //

  function playAudio() {
    audio.play();
    aBtn.removeEventListener("click", playAudio);
    aBtn.addEventListener("click", stopAudio);
    aIcon.className = "fas fa-music";
  }

  function stopAudio() {
    audio.pause();
    audio.currentTime = 0;
    aBtn.removeEventListener("click", stopAudio);
    aBtn.addEventListener("click", playAudio);
    aIcon.className = "fas fa-volume-mute";
  }
};
document.addEventListener("DOMContentLoaded", load);
