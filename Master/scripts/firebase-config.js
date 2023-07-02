// Configuração do Firebase para o aplicativo da web
const firebaseConfig = {
  apiKey: "AIzaSyClD3I2uJXPElH4L7GWP2Y4LKo17Z-S6Xg",
  authDomain: "toyinventory1-82627.firebaseapp.com",
  databaseURL: "https://toyinventory1-82627-default-rtdb.firebaseio.com",
  projectId: "toyinventory1-82627",
  storageBucket: "toyinventory1-82627.appspot.com",
  messagingSenderId: "291801727957",
  appId: "1:291801727957:web:48d0b0097b9662b71eb35c"
};

// Inicializar o Firebase com a configuração fornecida
  firebase.initializeApp(firebaseConfig);

// Inicializar o aplicativo com a configuração do Firebase
const app = initializeApp(firebaseConfig);

// Obter uma instância do serviço de autenticação do Firebase
var auth = firebase.auth();

// Obter uma instância do serviço de banco