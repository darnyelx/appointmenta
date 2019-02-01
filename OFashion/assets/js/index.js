$(document).ready(function() {
  $(".video-row-tv").on("mouseover", function(event) {
    this.play();

  }).on('mouseout', function(event) {
    this.pause();
  });
});

// slider heading
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName("market-advert");

  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
// ends of slider

// Add active class to the current button (highlight it)
const header = document.getElementsByClassName("menu-title");
const btns = document.getElementsByClassName("btn-title");

for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  let current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace("active", "");
  this.className += " active";
  });
}

// filter designer heading
// const notes = [{
//   title : 'school  days ',
//   body : 'school is fun'
// },
// {
//   title : 'school live ',
//   body : 'house is funny'
// },
// {
//   title : 'visit  days ',
//   body : 'visit home'
// }]

// filter variable
const filters = {
  searchText: ""
}

const renderNotes = (notes, filters) => {
  const filteredNotes = notes.filter((note) => {
    return note.title.toLowerCase().includes(filters.searchText.toLowerCase())
  });
  // clear the notes default
  document.querySelector('#notes').innerHTML = '';

  // add the new filtered Note
  filteredNotes.forEach((note) => {
    const noteEl = document.createElement('h2');
    noteEl.textContent = note.title
    document.querySelector('#notes').appendChild(noteEl);
  });
}
// render the function renderNotes
renderNotes(notes, filters);

// select designer search
document.querySelector('#select-designer').addEventListener('input', (e) => {
  filters.searchText = e.target.value
  renderNotes(notes, filters)
})
// Ends of filter designer heading
