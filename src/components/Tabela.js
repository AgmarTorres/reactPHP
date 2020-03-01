import React from 'react'


class Tabela extends React.Component{
    constructor(){
        super();

        this.state={
            db: []
        }
    }
    
    componentDidMount(){
        fetch("http://localhost/phpreact/libraries/src/api/")
        .then((responde) => responde.json())
        .then(repository => 
            this.setState({db: repository})
        )
    }

    render(){
        console.log( this.state.db)
        return(
            <div>
                {this.state.db.map( carro => (
                    <div key={carro.Id}><br/> Marca: {carro.Modelo} Modelo: {carro.Marca} </div>
                ))}
            
            </div>
        )
    }
}

export default Tabela