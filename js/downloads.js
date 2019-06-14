window.onload = function () {
    $.get('https://ms-paint-i.de/generated/releases.json', json => {
        console.log(json);
        json.reverse().forEach(version => {
            $('.download-card-container').append(generateTemplate(version));
        });
    });
};

function generateTemplate(json) {
    let resources = ``;
    json.downloads.forEach(download => {
        resources += `<a class="download-resource" href="${download.url}">
            <i class="fas fa-download download-resource-icon"></i>
            <div class="download-resource-data">
                <span class="download-resource-title">${download.title}</span>
                <span class="download-resource-info">${download.type}, ${download.size}</span>
            </div>
        </a>
`;
    });

    return `<div class="info-card download-card">
        <a class="download-card-link" href="#" target="_blank">
            <div class="left-section">
                <h4 class="download-card-version">${json.version}</h4>
                <span class="download-card-duration" title="Time since previous release">${json.date_diff} Days</span>
                <span class="download-card-commits" title="Amount of commits since previous release">${json.commits}<i class="fas fa-history"></i></span>
                <span class="download-card-changes"><span class="adds" title="Number of lines added since previous release">+ ${json.additions}</span><span class="subs" title="Number of lines removed since previous release">- ${json.deletions}</span></span>
            </div>
            <div class="right-section">
                <h4 class="download-card-title">${json.title}</h4>
                <p class="download-card-desc">${json.description}</p>
            </div>
        </a>
        ${resources}
    </div>`;
}