function output(json) {
    if (json.length) {
        try {
            document.getElementById('preview-json').innerHTML = ``;
            document.getElementById('preview-json').innerHTML = syntaxHighlighter(JSON.stringify(JSON.parse(json), null, 4));
        } catch (e) {
            return alert("Invalid JSON:\n" + e.message);
        }
    }
}
function syntaxHighlighter(json) {
    json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
        var cls = 'number';
        if (/^"/.test(match)) {
            if (/:$/.test(match)) {
                cls = 'key';
            } else {
                cls = 'string';
            }
        } else if (/true|false/.test(match)) {
            cls = 'boolean';
        } else if (/null/.test(match)) {
            cls = 'null';
        }
        return '<span class="' + cls + '">' + match + '</span>';
    });

}

function addNewHeaderInputs() {
    let randomId = btoa(Math.random()).substring(0,12);

    let rowElement =
        `<div class="row mb-2" id="${randomId}">
                    <div class="col-lg-5 col-sm-12">
                        <input type="text" id="" class="form-control" data-row="${randomId}" placeholder="header index" name="header_index[]">
                    </div>

                    <div class="col-lg-5 col-sm-12">
                        <input type="text" id="" class="form-control" data-row="${randomId}" placeholder="header value" name="header_value[]">
                    </div>

                    <div class="col-lg-2 col-sm-12">
                        <button type="button" class="btn btn-danger w-100" data-row="${randomId}" onclick="deleteHeaderRow('${randomId}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            remove
                        </button>
                    </div>
                    <br>
                </div>`;

    $('#header-items').append(rowElement);
}

function deleteHeaderRow(rowId) {
    $(document).find(`#${rowId}`).remove();
}

if (document.getElementById('body'))
    output(document.getElementById('body').value);

function copyUrl(url) {
    navigator.clipboard.writeText(url).then(() => {
        alert('The url copied to clipboard.');
    },() => {
        alert('Failed to copy !');
    });
}

function alertForRemove(href) {
    if (confirm('Are u sure for remove this response...?!')) {
        $.post({
            url: href,
            data: {
                _token: $(`meta[name='csrf-token']`).attr('content'),
                _method: "DELETE"
            },
            success: function () {
                alert('The response deleted successfully.');
                window.location.reload();
            },
            error: function () {
                alert('Something went wrong ... !');
            }
        });
    }
}
