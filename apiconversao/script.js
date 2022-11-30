function converter() {
 
    var entrada = document.getElementById("entrada").value
    var moeda = document.querySelector("#moedas").value
    fetch(`https://economia.awesomeapi.com.br/last/${moeda}`)
          .then(response => {
              response.json()
                  .then(data => {
                    if (moeda == 'EUR-BRL') {
                      bid = data["EURBRL"]["bid"]
                      moedaConvertida = calcularConversaoMoeda(entrada, bid)
                      document.getElementById("moeda-convertida").innerHTML = moedaConvertida
                      console.log(moedaConvertida)
                    } else if (moeda == 'USD-BRL'){
                      bid = data["USDBRL"]["bid"]
                      moedaConvertida = calcularConversaoMoeda(entrada, bid)
                      document.getElementById("moeda-convertida").innerHTML = moedaConvertida
                      console.log(moedaConvertida)
                    } else if (moeda == 'EUR-USD'){
                      bid = data["EURUSD"]["bid"]
                      moedaConvertida = calcularConversaoMoeda(entrada, bid)
                      document.getElementById("moeda-convertida").innerHTML = moedaConvertida
                      console.log(moedaConvertida)
                    }  else if (moeda == 'BRL-USD'){
                      bid = data["BRLUSD"]["bid"]
                      moedaConvertida = calcularConversaoMoeda(entrada, bid)
                      document.getElementById("moeda-convertida").innerHTML = moedaConvertida
                      console.log(moedaConvertida)
                    }  else if (moeda == 'BRL-EUR'){
                      bid = data["BRLEUR"]["bid"]
                      moedaConvertida = calcularConversaoMoeda(entrada, bid)
                      document.getElementById("moeda-convertida").innerHTML = moedaConvertida
                      console.log(moedaConvertida)
                    }  else if (moeda == 'USD-EUR'){
                      bid = data["USDEUR"]["bid"]
                      moedaConvertida = calcularConversaoMoeda(entrada, bid)
                      document.getElementById("moeda-convertida").innerHTML = moedaConvertida
                      console.log(moedaConvertida)
                    } 
                  })
          })
  }
  

function calcularConversaoMoeda(entrada, bid){
  return entrada * bid;
}