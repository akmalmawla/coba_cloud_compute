const news = [
  {
    title: "Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf)",
    date: "12 Mei 2013",
    desc: "Menobatkan Desa Nglanggeran di Kabupaten Gunungkidul, D.I.Yogyakarta sebagai salah satu dari tujuh Desa Wisata Mandiri Inspiratif dalam ajang Anugerah Desa Wisata Indonesia (ADWI) 2021.",
    image: "mentri.jpeg"
  },
  {
    title: "Desa Wisata Nglanggeran Raih Gelar UNWTO Best Tourism Village",
    date: "06 Dec 2021",
    desc: "Penghargaan ini dianugerahkan kepada Desa Wisata Nglanggeran pada seremoni UNWTO Best Tourism Villages yang dilaksanakan dalam rangkaian program “Thematic Session” pada Sidang Umum UNWTO ke-24 di Madrid,",
    image: "unwto.jpeg"
  }
];

let newsIndex = 0;

function showNews() {
  document.getElementById("newsTitle").innerText = news[newsIndex].title;
  document.getElementById("newsDate").innerText = news[newsIndex].date;
  document.getElementById("newsDesc").innerText = news[newsIndex].desc;

  // background image
  document.getElementById("newsCard").style.backgroundImage =
    `url('${news[newsIndex].image}')`;
}

function nextNews() {
  newsIndex = (newsIndex + 1) % news.length;
  showNews();
}

function prevNews() {
  newsIndex = (newsIndex - 1 + news.length) % news.length;
  showNews();
}

showNews();


const jobs = [
  {
    title: "Barista Griya Coklat Nglanggeran",
    type: "Full Time",
    contact: "WA: 0812-2222-2222",
    image: "https://images.unsplash.com/photo-1509042239860-f550ce710b93"
  },
  {
    title: "Guide Wisata Lokal",
    type: "Part Time",
    contact: "WA: 0821-1111-1111",
    image: "umkm2.jpg"
  }
];

let jobIndex = 0;

function showJob() {
  document.getElementById("jobTitle").innerText = jobs[jobIndex].title;
  document.getElementById("jobType").innerText = jobs[jobIndex].type;
  document.getElementById("jobContact").innerText = jobs[jobIndex].contact;

  // background image
  document.getElementById("jobCard").style.backgroundImage =
    `url('${jobs[jobIndex].image}')`;
}

function nextJob() {
  jobIndex = (jobIndex + 1) % jobs.length;
  showJob();
}

function prevJob() {
  jobIndex = (jobIndex - 1 + jobs.length) % jobs.length;
  showJob();
}

showJob();

const gallery = [
  {
    name: "Gunung Api Purba Nglanggeran",
    image: "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
  },
  {
    name: "Embung Nglanggeran",
    image: "https://images.unsplash.com/photo-1501785888041-af3ef285b470"
  },
  {
    name: "Air Terjun Kedung Kandang",
    image: "https://images.unsplash.com/photo-1526779259212-939e64788e3c"
  }
];

let galleryIndex = 0;

function showGallery() {
  document.getElementById("galleryCard").style.backgroundImage =
    `url('${gallery[galleryIndex].image}')`;

  document.getElementById("galleryName").innerText =
    gallery[galleryIndex].name;
}

function nextGallery() {
  galleryIndex = (galleryIndex + 1) % gallery.length;
  showGallery();
}

function prevGallery() {
  galleryIndex = (galleryIndex - 1 + gallery.length) % gallery.length;
  showGallery();
}

showGallery();