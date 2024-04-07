let playersOnDraft = {};
// #TODO:
// - Drag and drop?

const cfUrl = "https://d13ni07q601mto.cloudfront.net/";
let currentPitchTheme = "classic";
let formationTitle = "";

const pitchThemes = {
    "classic": {
        pitchColor: "#57a758",
        lineColor: "#f9f9f9",
        textColor: "#f9f9f9",
        textSurfaceColor: "#356435cc",
    },
    "midnight": {
        pitchColor: "#162d50",
        lineColor: "#939dac",
        textColor: "#f9f9f9",
        textSurfaceColor: "#0b1628cc",
    },
    "forest": {
        pitchColor: "#002b11",
        lineColor: "#deddda",
        textColor: "#f9f9f9",
        textSurfaceColor: "#00230ecc",
    },
    "twilight": {
        pitchColor: "#241f31",
        lineColor: "#9a9996",
        textColor: "#9a9996",
        textSurfaceColor: "#13111acc",
    },
    "skyline": {
        pitchColor: "#d7e3f4",
        lineColor: "#2e3436",
        textColor: "#2e3436",
        textSurfaceColor: "#dfe9f7cc",
    },
    "urban": {
        pitchColor: "#2e3436",
        lineColor: "#e2e3db",
        textColor: "#e2e3db",
        textSurfaceColor: "#171b1ccc",
    },
    "arctic": {
        pitchColor: "#dbe3e2",
        lineColor: "#373e48",
        textColor: "#373e48",
        textSurfaceColor: "#e8ededcc",
    },
    "premiership": {
        pitchColor: "#38003c",
        lineColor: "#00ff85",
        textColor: "#ffffff",
        textSurfaceColor: "#28002bcc",
    },
    "pine": {
        pitchColor: "#374837",
        lineColor: "#dbe3de",
        textColor: "#dbe3de",
        textSurfaceColor: "#283428e5",
    },
    "spring": {
        pitchColor: "#aade87",
        lineColor: "#002b00",
        textColor: "#002b00",
        textSurfaceColor: "#c6e9afcc",
    },
    "vintage": {
        pitchColor: "#241f1c",
        lineColor: "#d4aa00",
        textColor: "#d4aa00",
        textSurfaceColor: "#090707cc",
    },
}

$(document).ready(function () {

    prepareCanvas();
    updateDraft();

    $(".search-entity").select2({
        ajax: {
            url: "/search",
            dataType: "json",
            delay: 250,
            data: function (params) {
                var clubSearch = ($('#clubSearch').is(':checked')) ? true : false;
                return {
                    q: params.term,
                    clubSearch: clubSearch
                };
            },
            processResults: function (data) {
                return { results: data };
            },
            cache: true
        },
        placeholder: "Search for a player...",
        escapeMarkup: function (m) { return m; },
        minimumInputLength: 4,
        templateResult: template,
        templateSelection: optionData
    });

    $(".search-entity").on("select2:select", async function (e) {
        const selected = e.params.data;
        const id = $(this).data('id');
        const imgURL = cfUrl + selected.s3url + ".png";
        const playerName = selected.text;

        playersOnDraft[id] = { "imgURL": imgURL, "name": playerName, "s3url": selected.s3url, "_id": selected._id };

        await upsertImage(id, imgURL, playerName);
        prepareCanvas();
        $(this).val('').trigger('change');
        $(this).parent().siblings('.search-selected').html(selected.text);
    });

    $("#formationSelect").change(function () {
        currentFormation = formations[$(this).val()];
        prepareCanvas();
    });

    $("#pitchThemeSelect").change(function () {
        currentPitchTheme = $(this).val();
        prepareCanvas();
    });
});

async function upsertImage(id, imgURL, playerName) {
    let $draftImg;
    // If there is already an img for this position on the draft
    if ($("#draft-img-" + id).length) {
        $draftImg = $("#draft-img-" + id);
    } else {
        $draftImg = $("<img crossorigin='anonymous' class='draft-img' id='draft-img-" + id + "'/>");
    }

    return new Promise((resolve, reject) => {
        $draftImg.on('load', function () {
            $("#draft-container-" + id).append($draftImg);
            resolve();
        });

        $draftImg.on('error', function () {
            reject();
        });
        $draftImg.attr("src", imgURL);
    });
}

function optionData(data, container) {
    $(data.element).attr("data-s3url", data.s3url);
    $(data.element).attr("data-pos", data.pos);
    return data.text;
}

function template(data, container) {
    if (data.text && data.s3url) {
        const pImg = `<div class="column is-one-third"><img crossorigin="anonymous" class="player-img" src="${cfUrl}${data.s3url}.png"/></div>`;
        const pName = '<div class="column"><p class="player-name"><strong>' + data.text + '</strong></p>';
        const pDetails = '<p class="player-details">' + data.club + ' , ' + data.age + ' , ' + data.pos + '</p></div>';
        return '<div class="columns">' + pImg + pName + pDetails + '</div>';
    }
}

function drawPositionCircle(ctx, posName, destX, destY, color) {
    ctx.beginPath();
    ctx.arc(destX + 100, destY + 100, 40, 0, 2 * Math.PI, false);
    ctx.fillStyle = circleColors[posName];
    ctx.fill();
    ctx.lineWidth = 2;
    ctx.strokeStyle = color;
    ctx.stroke();
    ctx.font = "bold 28px system-ui";
    ctx.fillStyle = "white";
    ctx.textAlign = "center";
    ctx.fillText(posName.toUpperCase(), destX + 100, destY + 110);
    ctx.closePath();
}

function updateDraft() {
    const positions = $(".position-label");
    const draftContainers = $(".draft-container");
    for (let id = 0; id < 11; id++) {
        const newPos = currentFormation[id];
        const destX = newPos.cx;
        const destY = newPos.cy;
        const posName = newPos.pos;

        $(draftContainers[id]).css({
            "left": destX + "%",
            "top": destY + "%",
        });

        let $draftPos;
        if ($("#draft-pos-" + id).length) {
            $draftPos = $("#draft-pos-" + id);
        } else {
            $draftPos = $("<div class='draft-pos' id='draft-pos-" + id + "'> </div>");
            $(draftContainers[id]).append($draftPos);
        }

        $draftPos.css("background-color", circleColors[posName]).html(posName);
        $(positions[id]).css("background-color", circleColors[posName]).html(posName);
    }
}

function prepareCanvas() {
    const canvas = document.getElementById("canvas1");
    const ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    const padd = 60;
    const w = canvas.width; //1000
    const h = canvas.height; //1400
    const selects = $(".search-entity");
    const positions = $(".position-label");

    // -- START DRAWING THE FIELD --
    ctx.fillStyle = pitchThemes[currentPitchTheme].pitchColor;
    ctx.fillRect(0, 0, w, h);
    ctx.strokeStyle = pitchThemes[currentPitchTheme].lineColor;
    ctx.beginPath();

    // -- Outer Lines --
    ctx.moveTo(padd, padd);
    ctx.lineTo(w - padd, padd);
    ctx.lineTo(w - padd, h - padd);
    ctx.lineTo(padd, h - padd);
    ctx.lineTo(padd, padd);

    // -- Top Goal Post --
    ctx.moveTo(440, padd);
    ctx.lineTo(440, padd - padd / 2);
    ctx.lineTo(560, padd - padd / 2);
    ctx.lineTo(560, padd);

    // -- Bot Goal Post --
    ctx.moveTo(440, h - padd);
    ctx.lineTo(440, h - padd + padd / 2);
    ctx.lineTo(560, h - padd + padd / 2);
    ctx.lineTo(560, h - padd);

    // -- Top Penalty Area --
    ctx.moveTo(250, padd);
    ctx.lineTo(250, padd + 200);
    ctx.lineTo(750, padd + 200);
    ctx.lineTo(750, padd);
    ctx.moveTo(400, padd);
    ctx.lineTo(400, padd + 70);
    ctx.lineTo(600, padd + 70);
    ctx.lineTo(600, padd);

    // -- Bot Penalty Area --
    ctx.moveTo(250, h - padd);
    ctx.lineTo(250, h - padd - 200);
    ctx.lineTo(750, h - padd - 200);
    ctx.lineTo(750, h - padd);
    ctx.moveTo(400, h - padd);
    ctx.lineTo(400, h - padd - 70);
    ctx.lineTo(600, h - padd - 70);
    ctx.lineTo(600, h - padd);

    // -- Middle Line --
    ctx.moveTo(padd, h / 2);
    ctx.lineTo(w - padd, h / 2);

    // -- Circles and semi-circles --
    ctx.moveTo(400, padd + 200);
    ctx.quadraticCurveTo(w / 2, padd + 270, 600, padd + 200);
    ctx.moveTo(400, h - padd - 200);
    ctx.quadraticCurveTo(w / 2, h - padd - 270, 600, h - padd - 200);
    ctx.moveTo(w / 2, h / 2);
    ctx.arc(w / 2, h / 2, 60, 0, Math.PI * 2, true);

    // -- Corner quarter-circles --
    ctx.moveTo(padd, padd);
    ctx.arc(padd, padd, 32, 0, Math.PI / 2, false);
    ctx.moveTo(w - padd, padd);
    ctx.arc(w - padd, padd, 32, Math.PI / 2, Math.PI, false);
    ctx.moveTo(w - padd, h - padd);
    ctx.arc(w - padd, h - padd, 32, Math.PI, Math.PI * 1.5, false);
    ctx.moveTo(padd, padd);
    ctx.arc(padd, h - padd, 32, Math.PI * 1.5, 0, false);

    ctx.moveTo(0, 0);
    ctx.closePath();
    ctx.lineWidth = 6;
    ctx.stroke();
    // -- END DRAWING THE FIELD --

    ctx.font = "20px arial";
    ctx.fillStyle = pitchThemes[currentPitchTheme].textColor;
    ctx.textAlign = "center";
    ctx.fillText("Created with CreateFormation.com", 820, 1390);

    for (let i = 0; i < 11; i++) {
        const newPos = currentFormation[i];
        const sel = selects[i];
        const player = playersOnDraft[i.toString()];

        const destX = newPos.cx * w / 100;
        const destY = newPos.cy * h / 100;
        const posName = newPos.pos;
        const imgSize = 200;

        //  If the select2 select has a value, draw an image, else a simple circle.
        if (player && player.imgURL) {
            const img = document.getElementById("draft-img-" + i);
            ctx.drawImage(img, destX, destY, imgSize, imgSize);

            const playerName = getPlayerName(player.name);
            ctx.font = "28px Fira Sans";
            const textSize = ctx.measureText(playerName).width;

            const padding = 20;
            const rectWidth = textSize + padding * 2;
            const rectX = destX + imgSize / 2 - rectWidth / 2;
            const rectY = destY + imgSize;

            ctx.fillStyle = pitchThemes[currentPitchTheme].textSurfaceColor;
            ctx.beginPath();
            ctx.roundRect(rectX, rectY, rectWidth, 45, 7);
            ctx.fill();
            ctx.closePath();

            const textX = rectX + rectWidth / 2;
            const textY = destY + imgSize + 35;

            ctx.fillStyle = pitchThemes[currentPitchTheme].textColor;
            ctx.textAlign = "center";
            ctx.fillText(playerName, textX, textY);

        } else {
            drawPositionCircle(ctx, posName, destX, destY, "#fff");
        }
        // Set the new attributes for each position.
        sel.setAttribute("data-id", i);
        sel.setAttribute("data-cx", destX);
        sel.setAttribute("data-cy", destY);
        $(positions[i]).css("background-color", circleColors[posName]).html(posName);
    }

    if (formationTitle != "") {
        ctx.font = "24px Fira Sans";
        const textSize = ctx.measureText(formationTitle).width;
        const padding = 20;
        const rectWidth = textSize + padding * 2;
        ctx.fillStyle = pitchThemes[currentPitchTheme].textSurfaceColor;
        ctx.beginPath();
        ctx.roundRect(0, 0, rectWidth, 40, [0, 0, 7, 0]);
        ctx.fill();
        ctx.closePath();

        ctx.fillStyle = pitchThemes[currentPitchTheme].textColor;
        ctx.textAlign = "left";
        ctx.fillText(formationTitle, 20, 30);
    }
}

/********************
 **  SAVE/LOAD CONFIG
 ********************/
function saveConfig() {
    let saveData = { title: $('#formation-title').val(), formation: $("#formationSelect").val(), theme: $("#pitchThemeSelect").val() };
    for (let p in playersOnDraft) {
        let player = playersOnDraft[p];
        saveData[p] = { name: player.name, id: player.s3url };
    }
    return JSON.stringify(saveData);
}

function loadConfig(loadData) {
    $("#formation-title").val(loadData.title).trigger("change");
    $("#formationSelect").val(loadData.formation).trigger("change");
    if (loadData.theme) {
        $("#pitchThemeSelect").val(loadData.theme).trigger("change");
    } else {
        $("#pitchThemeSelect").val("classic").trigger("change");
    }
    // Initialize players
    $(".remove-player").trigger("click");

    let allPromises = [];

    for (let i = 0; i < 11; i++) {
        if (loadData[i]) {
            let p = loadData[i];
            allPromises.push(loadPlayer(p.id, i));
        }
    }
    // Once all player images have been loaded, update the canvas.
    Promise.all(allPromises).then(function () {
        prepareCanvas();
    });
}

function loadPlayer(s3url, id) {
    return new Promise((resolve, reject) => {
        // Fetch the preselected item, and add to the control
        const playerSelect = $('.search-entity[data-id="' + id + '"]');
        $.ajax({
            type: 'GET',
            url: '/api/player/p/' + s3url
        }).then(function (data) {
            const option = new Option(data.name, data.id, true, true);
            playerSelect.append(option).trigger('change');

            const imgURL = cfUrl + s3url + ".png?crossorigin";
            const playerName = data.name;

            playersOnDraft[id] = { "name": playerName, "imgURL": imgURL, "s3url": s3url };
            playerSelect.parent().siblings('.search-selected').html(data.name);
            upsertImage(id, imgURL, playerName).then(resolve).catch(reject);
        });
    });
}


/********************
 **  EVENT LISTENERS
 ********************/
$(".position").hover(function () {
    $(this).addClass('focused');
    const select = $(this).find('.search-entity');
    const id = select.data('id');
    $("#draft-pos-" + id).addClass('focused');
}, function () {
    $(this).removeClass('focused');
    const select = $(this).find('.search-entity');
    const id = select.data('id');
    $("#draft-pos-" + id).removeClass('focused');
});

$(".remove-player").on("click", function () {
    const $positionDiv = $(this).parent().parent();
    const id = $positionDiv.find('.search-entity').data('id');
    delete playersOnDraft[id];

    $("#draft-label-" + id).remove();
    $("#draft-img-" + id).remove();
    $("#draft-pos-" + id).show();

    $positionDiv.find('.search-selected').html("");
    $positionDiv.find('.search-entity').val("").trigger("change");
});

$('#loadFormation').on("click", function () {
    let loadData = JSON.parse($('#formationDataHolder').val());
    loadConfig(loadData);
    $('.modal').toggleClass('is-active');
    $('html').toggleClass('is-clipped');
});

$('#saveFormation').on("click", function () {
    let save = saveConfig();
    this.href = 'data:text/plain;charset=utf-8,' + encodeURIComponent(save);
    let fileName = "createFormation__" + $('#formation-title').val().substring(0, 32);
    this.download = fileName.replace(/[^\w]/gi, "_") + ".txt";
});

$('.toggleModal').on("click", function () {
    $('.modal').toggleClass('is-active');
    $('html').toggleClass('is-clipped');
});

$("#download").on("click", function () {
    prepareCanvas();
    var canvas = document.getElementById("canvas1");
    this.href = canvas.toDataURL();
    var d = new Date();
    var dateString = d.toLocaleString().replace(/[^\w\s]/gi, '_');
    this.download = $('#formation-title').val() || "formation_" + dateString;
});

$('#formation-title').change(function () {
    formationTitle = $(this).val();
    prepareCanvas();
});

document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        var $notification = $delete.parentNode;

        $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
        });
    });
});

function getPlayerName(name) {
    const split = name.split(" ");
    if (split.length === 1) return name;
    // Drop the first word of the name and return the rest:
    return split.slice(1).join(" ");
}