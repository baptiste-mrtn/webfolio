  const skills = [
    { name: "HTML5", img: "https://seeklogo.com/images/H/html5-logo-0668063811-seeklogo.com.png" },
    { name: "CSS3", img: "https://cdn.icon-icons.com/icons2/512/PNG/512/css3-02_icon-icons.com_50917.png" },
    { name: "JavaScript", img: "https://cdn.icon-icons.com/icons2/2389/PNG/512/javascript_logo_icon_145155.png" },
    { name: "PHP", img: "https://cdn.icon-icons.com/icons2/2389/PNG/512/php_logo_icon_144990.png" },
    { name: "Laravel", img: "https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-6ut6f6x6.png" },
    { name: "Angular", img: "https://angular.io/assets/images/logos/angular/angular_solidBlack.png" },
    { name: "Symfony", img: "https://maclaine.fr/wp-content/uploads/2021/12/Maclaine-la-rochelle-Agence-symfony.png" },
    { name: "Vue.js", img: "https://www.svgrepo.com/show/327411/logo-vue.svg" },
    { name: "React", img: "https://static-00.iconduck.com/assets.00/react-icon-2048x1822-iy7h2x8y.png" },
    { name: "Java", img: "https://cdn-icons-png.freepik.com/512/14/14427.png" },
    { name: "Base de données", img: "https://icones.pro/wp-content/uploads/2021/05/icone-base-donnees-noir.png" },
    { name: "WordPress", img: "https://cdn-icons-png.flaticon.com/512/59/59483.png" },
    { name: "Photoshop", img: "https://cdn-icons-png.flaticon.com/512/121/121140.png" },
    { name: "Illustrator", img: "https://cdn-icons-png.flaticon.com/512/121/121135.png" },
    { name: "InDesign", img: "https://cdn-icons-png.flaticon.com/512/121/121136.png" }
  ];

  const container = document.querySelector(".wheel-container");
  const radius = 150;

  skills.forEach((skill, index) => {
    const angle = (index / skills.length) * (2 * Math.PI);
    const x = Math.cos(angle) * radius + 170;
    const y = Math.sin(angle) * radius + 170;

    const div = document.createElement("div");
    div.className = "bubble";
    div.setAttribute("data-name", skill.name);
    div.style.left = `${x}px`;
    div.style.top = `${y}px`;

    const img = document.createElement("img");
    img.src = skill.img;
    img.alt = skill.name;

    div.appendChild(img);
    container.appendChild(div);
  });