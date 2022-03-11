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
