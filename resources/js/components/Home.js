import React from 'react';
import ReactDOM from 'react-dom';

function Home() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        ЛОГО гоес хере
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Home;

if (document.getElementById('main')) {
    ReactDOM.render(<Home />, document.getElementById('main'));
}
