import Chart from 'chart.js/auto';

export const createChart = (canvasId, config) => {
    const ctx = document.getElementById(canvasId);
    const chart = new Chart(ctx, config);
    return [ctx, chart];
};

export const downloadChartAsPNG = (chart) => {
    const config = chart.config._config;
    const filename = config.filename ? config.filename + '.png' : 'chart.png';
    const a = document.createElement('a');
    a.href = chart.toBase64Image();
    a.download = filename;
    a.click();
};

export const downloadChartAsCSV = (chart) => {
    const config = chart.config._config;
    const datasets = config.data.datasets;
    const labels = config.data.labels;
    const title = config.data.title;
    let csv = '';
    // csv header
    csv += `${title || 'Undefined Column'},`;
    for (const dataset of datasets) {
        const label = dataset.label
            .replaceAll(',', '')
            .normalize('NFD')
            .replace(/[\u0300-\u036F]/g, '');
        csv += label + ',';
    }
    csv = csv.slice(0, -1) + '\n';

    // csv body
    for (const i in datasets[0].data) {
        // data
        const label = labels[i]
            .replaceAll(',', '')
            .normalize('NFD')
            .replace(/[\u0300-\u036F]/g, '');
        csv += label + ',';

        for (const j in datasets) {
            // data
            csv += datasets[j].data[i] + ',';
        }

        csv = csv.slice(0, -1) + '\n';
    }

    if (!csv) return;

    const filename = config.filename ? config.filename + '.csv' : 'chart.csv';
    csv = 'data:text/csv;charset=utf-8,' + csv;

    const data = encodeURI(csv);
    const link = document.createElement('a');
    link.setAttribute('href', data);
    link.setAttribute('download', filename);
    document.body.append(link);
    link.click();
    document.body.removeChild(link);
};
