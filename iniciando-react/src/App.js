import React from 'react';

/*function ComponenteFuncional(){
  return (
    <h1>Olá</h1>
  )
}*/

class App extends React.Component {

state={
  nome : ""
}

  modificarNome = (event) => {
    let nome = event.target.value;
    this.setState({
      nome: nome
      //ou nome: event.target.value
    })
  }

  render(){
    return(
      <>
      <input type="text" value={this.state.nome} onChange={this.modificarNome} />
      <h1>Hello {this.state.nome}</h1>
      </>
    )
  }
}

export default App;