export const barrierGraphConfig = () => {
    const barrierGraph = new BarrierGraphBase().config;
    return barrierGraph;
};

class BarrierGraphBase {
    constructor() {
        this.config = {
            type: 'line',
            data: {
                labels: ['T0', 'T1', 'T2', 'T3', 'T4', 'T5', 'T6'],
                datasets: [
                    {
                        label: 'Measures on untreated skin',
                        data: [
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                        ],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1,
                    },
                    {
                        label: 'Measures on treated skin',
                        data: [
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                            Math.floor(Math.random() * 100),
                        ],
                        fill: false,
                        borderColor: 'rgb(200, 192, 192)',
                        tension: 0.1,
                    },
                ],
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text: 'VITC with barrier score',
                        font: {
                            size: 16,
                            family: 'Roboto',
                            weight: 500,
                        },
                        align: 'start',
                        color: '#424242',
                    },
                },
            },
        };
    }

    config;
}
