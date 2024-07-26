export function sendMail(){
  var params = {
    email: document.getElementById("email").value,
    body: document.getElementById("body").value,
  };

  const serviceID = "service_6zsbite";
  const templateID = "template_bohik8i";
  console.log(params);
  emailjs
    .send(serviceID, templateID, params)
    .then((res)=>{
      document.getElementById("email").value = "";
      document.getElementById("body").value = "";
      console.log(res);
      alert("Your message sent successfully !");
    })
    .catch((err) => console.log(err));
}