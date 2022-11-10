const provider = window.ethereum;
const ethereumButton    = document.querySelector('.enableEthereumButton');
const networkButton     = document.querySelector('.addNetwork');

if (provider){
    async function run() {
        const chainId   = await provider.request({method: 'eth_chainId'});
        if (chainId === '0x38'){
            ethereumButton.addEventListener('click', () => {
                ethereum.request({ method: 'eth_requestAccounts' });
            });
        }else{
            console.log("Bad");
            networkButton.addEventListener('click', async () => {
                try {
                    await provider.request({
                        method: 'wallet_switchEthereumChain',
                        params: [{chainId: '0x38'}],
                    });
                    console.log("You have succefully switched to Binance Test network")
                } catch (switchError) {
                    // This error code indicates that the chain has not been added to MetaMask.
                    if (switchError.code === 4902) {
                        console.log("This network is not available in your metamask, please add it")
                    }
                    if (switchError.code === 4902) {
                        console.log("User rejected the request")
                    }
                    console.log("Failed to switch to the network")
                }
            });
        }
    }
    run();
}else{
    console.log("Metamask is not installed, please install!");
}




document.getElementById('connectButton', connect);

function connect() {
    ethereum
        .request({ method: 'eth_requestAccounts' })
        .then(handleAccountsChanged)
        .catch((error) => {
            if (error.code === 4001) {
                // EIP-1193 userRejectedRequest error
                console.log('Please connect to MetaMask.');
            } else {
                console.error(error);
            }
        });
}

