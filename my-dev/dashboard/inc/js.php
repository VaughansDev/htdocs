<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>

<script>
    var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
        contentHeight: 'auto',
        initialView: "dayGridMonth",
        headerToolbar: {
            start: 'title', // will normally be on the left. if RTL, will be on the right
            center: '',
            end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        },
        selectable: true,
        editable: true,
        initialDate: '2021-12-01',
        events: [{
                title: 'Call with Dave',
                start: '2021-11-18',
                end: '2021-11-18',
                className: 'bg-gradient-danger'
            },

            {
                title: 'Lunch meeting',
                start: '2021-11-21',
                end: '2021-11-22',
                className: 'bg-gradient-warning'
            },

            {
                title: 'All day conference',
                start: '2021-11-29',
                end: '2021-11-29',
                className: 'bg-gradient-success'
            },

            {
                title: 'Meeting with Mary',
                start: '2021-12-01',
                end: '2021-12-01',
                className: 'bg-gradient-info'
            },

            {
                title: 'Winter Hackaton',
                start: '2021-12-03',
                end: '2021-12-03',
                className: 'bg-gradient-danger'
            },

            {
                title: 'Digital event',
                start: '2021-12-07',
                end: '2021-12-09',
                className: 'bg-gradient-warning'
            },

            {
                title: 'Marketing event',
                start: '2021-12-10',
                end: '2021-12-10',
                className: 'bg-gradient-primary'
            },

            {
                title: 'Dinner with Family',
                start: '2021-12-19',
                end: '2021-12-19',
                className: 'bg-gradient-danger'
            },

            {
                title: 'Black Friday',
                start: '2021-12-23',
                end: '2021-12-23',
                className: 'bg-gradient-info'
            },

            {
                title: 'Cyber Week',
                start: '2021-12-02',
                end: '2021-12-02',
                className: 'bg-gradient-warning'
            },

        ],
        views: {
            month: {
                titleFormat: {
                    month: "long",
                    year: "numeric"
                }
            },
            agendaWeek: {
                titleFormat: {
                    month: "long",
                    year: "numeric",
                    day: "numeric"
                }
            },
            agendaDay: {
                titleFormat: {
                    month: "short",
                    year: "numeric",
                    day: "numeric"
                }
            }
        },
    });

    calendar.render();
</script>

<script>
    var ctx1 = document.getElementById("chart-line-1").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(255,255,255,0.3)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Visitors",
                tension: 0.5,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#fff",
                borderWidth: 2,
                backgroundColor: gradientStroke1,
                data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
                maxBarThickness: 6,
                fill: true
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
            },
        },
    });
</script>

<script>
    if (document.getElementById('choices-gender')) {
        var gender = document.getElementById('choices-gender');
        const example = new Choices(gender);
    }

    if (document.getElementById('choices-language')) {
        var language = document.getElementById('choices-language');
        const example = new Choices(language);
    }

    if (document.getElementById('choices-skills')) {
        var skills = document.getElementById('choices-skills');
        const example = new Choices(skills, {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
            addItems: true
        });
    }

    if (document.getElementById('choices-year')) {
        var year = document.getElementById('choices-year');
        setTimeout(function() {
            const example = new Choices(year);
        }, 1);

        for (y = 1900; y <= 2020; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 2020) {
                optn.selected = true;
            }

            year.options.add(optn);
        }
    }

    if (document.getElementById('choices-day')) {
        var day = document.getElementById('choices-day');
        setTimeout(function() {
            const example = new Choices(day);
        }, 1);


        for (y = 1; y <= 31; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 1) {
                optn.selected = true;
            }

            day.options.add(optn);
        }

    }

    if (document.getElementById('choices-month')) {
        var month = document.getElementById('choices-month');
        setTimeout(function() {
            const example = new Choices(month);
        }, 1);

        var d = new Date();
        var monthArray = new Array();
        monthArray[0] = "January";
        monthArray[1] = "February";
        monthArray[2] = "March";
        monthArray[3] = "April";
        monthArray[4] = "May";
        monthArray[5] = "June";
        monthArray[6] = "July";
        monthArray[7] = "August";
        monthArray[8] = "September";
        monthArray[9] = "October";
        monthArray[10] = "November";
        monthArray[11] = "December";
        for (m = 0; m <= 11; m++) {
            var optn = document.createElement("OPTION");
            optn.text = monthArray[m];
            // server side month start from one
            optn.value = (m + 1);
            // if june selected
            if (m == 1) {
                optn.selected = true;
            }
            month.options.add(optn);
        }
    }

    function visible() {
        var elem = document.getElementById('profileVisibility');
        if (elem) {
            if (elem.innerHTML == "Switch to visible") {
                elem.innerHTML = "Switch to invisible"
            } else {
                elem.innerHTML = "Switch to visible"
            }
        }
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script>
    if (document.getElementById('choices-questions')) {
        var element = document.getElementById('choices-questions');
        const example = new Choices(element);
    }
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    // Line chart
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Organic Search",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#5e72e4",
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6
                },
                {
                    label: "Referral",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#3A416F",
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                },
                {
                    label: "Direct",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#17c1e8",
                    borderColor: "#17c1e8",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                },
            },
        },
    });


    // Doughnut chart
    new Chart(ctx2, {
        type: "doughnut",
        data: {
            labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
            datasets: [{
                label: "Projects",
                weight: 9,
                cutout: 60,
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                data: [15, 20, 12, 60, 20],
                fill: false
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
            },
        },
    });
</script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    // Line chart
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Organic Search",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#5e72e4",
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6
                },
                {
                    label: "Referral",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#3A416F",
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                },
                {
                    label: "Direct",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#17c1e8",
                    borderColor: "#17c1e8",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                },
            },
        },
    });


    // Doughnut chart
    new Chart(ctx2, {
        type: "doughnut",
        data: {
            labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
            datasets: [{
                label: "Projects",
                weight: 9,
                cutout: 60,
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                data: [15, 20, 12, 60, 20],
                fill: false
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
            },
        },
    });
</script>


<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: false,
        fixedHeight: true
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true
    });
</script>

<script>
    // jkanban init

    (function() {
        if (document.getElementById("myKanban")) {
            var KanbanTest = new jKanban({
                element: "#myKanban",
                gutter: "10px",
                widthBoard: "450px",
                click: el => {
                    let jkanbanInfoModal = document.getElementById("jkanban-info-modal");

                    let jkanbanInfoModalTaskId = document.querySelector(
                        "#jkanban-info-modal #jkanban-task-id"
                    );
                    let jkanbanInfoModalTaskTitle = document.querySelector(
                        "#jkanban-info-modal #jkanban-task-title"
                    );
                    let jkanbanInfoModalTaskAssignee = document.querySelector(
                        "#jkanban-info-modal #jkanban-task-assignee"
                    );
                    let jkanbanInfoModalTaskDescription = document.querySelector(
                        "#jkanban-info-modal #jkanban-task-description"
                    );
                    let taskId = el.getAttribute("data-eid");

                    let taskTitle = el.querySelector('p.text').innerHTML;
                    let taskAssignee = el.getAttribute("data-assignee");
                    let taskDescription = el.getAttribute("data-description");
                    jkanbanInfoModalTaskId.value = taskId;
                    jkanbanInfoModalTaskTitle.value = taskTitle;
                    jkanbanInfoModalTaskAssignee.value = taskAssignee;
                    jkanbanInfoModalTaskDescription.value = taskDescription;
                    var myModal = new bootstrap.Modal(jkanbanInfoModal, {
                        show: true
                    });
                    myModal.show();
                },
                buttonClick: function(el, boardId) {
                    if (
                        document.querySelector("[data-id='" + boardId + "'] .itemform") ===
                        null
                    ) {
                        // create a form to enter element
                        var formItem = document.createElement("form");
                        formItem.setAttribute("class", "itemform");
                        formItem.innerHTML = `<div class="form-group">
          <textarea class="form-control" rows="2" autofocus></textarea>
          </div>
          <div class="form-group">
              <button type="submit" class="btn bg-gradient-success btn-sm pull-end">Add</button>
              <button type="button" id="kanban-cancel-item" class="btn bg-gradient-light btn-sm pull-end me-2">Cancel</button>
          </div>`;

                        KanbanTest.addForm(boardId, formItem);
                        formItem.addEventListener("submit", function(e) {
                            e.preventDefault();
                            var text = e.target[0].value;
                            let newTaskId =
                                "_" + text.toLowerCase().replace(/ /g, "_") + boardId;
                            KanbanTest.addElement(boardId, {
                                id: newTaskId,
                                title: text,
                                class: ["border-radius-md"]
                            });
                            formItem.parentNode.removeChild(formItem);
                        });
                        document.getElementById("kanban-cancel-item").onclick = function() {
                            formItem.parentNode.removeChild(formItem);
                        };
                    }
                },
                addItemButton: true,
                boards: [{
                        id: "_backlog",
                        title: "Backlog",
                        item: [{
                                id: "_task_1_title_id",
                                title: '<p class="text mb-0">Click me to change title</p>',
                                class: ["border-radius-md"]
                            },
                            {
                                id: "_task_2_title_id",
                                title: '<p class="text mb-0">Drag me to "In progress" section</p>',
                                class: ["border-radius-md"]
                            },
                            {
                                id: "_task_do_something_id",
                                title: '<img src="../../assets/img/office-dark.jpg" class="w-100"><span class="mt-3 badge badge-sm bg-gradient-primary">Pending</span><p class="text mt-2">Website Design: New cards for blog section and profile details</p><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">3</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs rounded-circle me-2" data-toggle="tooltip" data-original-title="Audrey Love"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class="rounded-circle"></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class="rounded-circle"></a></div></div>',
                                assignee: "Done Joe",
                                description: "This task's description is for something, but not for anything",
                                class: ["border-radius-md"]
                            },
                        ]
                    },
                    {
                        id: "_progress",
                        title: "In progress",
                        item: [{
                                id: "_task_3_title_id",
                                title: '<span class="mt-2 badge badge-sm bg-gradient-warning">Errors</span><p class="text mt-2">Fix Firefox errors</p><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">11</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class=""></a></div></div>',
                                class: ["border-radius-md"]
                            },
                            {
                                id: "_task_4_title_id",
                                title: '<span class="mt-2 badge badge-sm bg-gradient-info">Updates</span><p class="text mt-2">Argon Dashboard PRO - Angular 11</p><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">3</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-5.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class=""></a></div></div>',
                                class: ["border-radius-md"]
                            },
                            {
                                id: "_task_do_something_4_id",
                                title: '<img src="../../assets/img/meeting.jpg" class="w-100"><span class="mt-3 badge badge-sm bg-gradient-info">Updates</span><p class="text mt-2">Vue 3 Updates</p><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">9</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs rounded-circle me-2" data-toggle="tooltip" data-original-title="Audrey Love"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class="rounded-circle"></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class="rounded-circle"></a></div></div>',
                                assignee: "Done Joe",
                                description: "This task's description is for something, but not for anything",
                                class: ["border-radius-md"]
                            }
                        ]

                    },
                    {
                        id: "_working",
                        title: "In review",
                        item: [{
                                id: "_task_do_something_2_id",
                                title: '<span class="mt-2 badge badge-sm bg-gradient-warning">In Testing</span><p class="text mt-2">Responsive Changes</p><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">11</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class=""></a></div></div>',
                                assignee: "Done Joe",
                                description: "This task's description is for something, but not for anything",
                                class: ["border-radius-md"]
                            },
                            {
                                id: "_task_run_id",
                                title: '<span class="mt-2 badge badge-sm bg-gradient-success">In review</span><p class="text mt-2 mb-1">Change images dimension</p><div class="col"><div class="progress progressm mb-3 w5"><div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div></div></div><div class="d-flex"><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class=""></a></div></div>',
                                assignee: "Done Joe",
                                description: "This task's description is for something, but not for anything",
                                class: ["border-radius-md"]
                            },
                            {
                                id: "_task_do_something_3_id",
                                title: '<span class="mt-2 badge badge-sm bg-gradient-info">In Review</span><p class="text mt-2 mb-1">Update Links</p><div class="col"><div class="progress progressm mb-3 w5"><div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div></div></div><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">6</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-5.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Mike Alis"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class=""></a></div></div>',
                                assignee: "Done Joe",
                                description: "This task's description is for something, but not for anything",
                                class: ["border-radius-md"]
                            }
                        ]
                    },
                    {
                        id: "_done",
                        title: "Done",
                        item: [{
                                id: "_task_all_right_id",
                                title: '<img src="../../assets/img/home-decor-1.jpg" class="w-100"><span class="mt-3 badge badge-sm bg-gradient-success">Done</span><p class="text mt-2">Redesign for the home page</p><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">8</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-5.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs rounded-circle me-2" data-toggle="tooltip" data-original-title="Audrey Love"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class="rounded-circle"></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class="rounded-circle"></a></div></div>',
                                assignee: "Done Joe",
                                description: "This task's description is for something, but not for anything",
                                class: ["border-radius-md"]
                            },
                            {
                                id: "_task_ok_id",
                                title: '<span class="mt-2 badge badge-sm bg-gradient-success">Done</span><p class="text mt-2">Schedule winter campaign</p><div class="d-flex"><div> <i class="fa fa-paperclip me-1 text-sm"></i><span class="text-sm">2</span></div><div class="avatar-group ms-auto"><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Michael Laurence"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class=""></a><a href="javascript:;" class="avatar avatar-xs me-2 rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class="rounded-circle"></a></div></div>',
                                assignee: "Done Joe",
                                description: "This task's description is for something, but not for anything",
                                class: ["border-radius-md"]
                            }
                        ]
                    }
                ]
            });

            var addBoardDefault = document.getElementById("jkanban-add-new-board");
            addBoardDefault.addEventListener("click", function() {
                let newBoardName = document.getElementById("jkanban-new-board-name")
                    .value;
                let newBoardId = "_" + newBoardName.toLowerCase().replace(/ /g, "_");
                KanbanTest.addBoards([{
                    id: newBoardId,
                    title: newBoardName,
                    item: []
                }]);
                document.querySelector('#new-board-modal').classList.remove('show');
                document.querySelector('body').classList.remove('modal-open');

                document.querySelector('.modal-backdrop').remove();
            });

            var updateTask = document.getElementById("jkanban-update-task");
            updateTask.addEventListener("click", function() {
                let jkanbanInfoModalTaskId = document.querySelector(
                    "#jkanban-info-modal #jkanban-task-id"
                );
                let jkanbanInfoModalTaskTitle = document.querySelector(
                    "#jkanban-info-modal #jkanban-task-title"
                );
                let jkanbanInfoModalTaskAssignee = document.querySelector(
                    "#jkanban-info-modal #jkanban-task-assignee"
                );
                let jkanbanInfoModalTaskDescription = document.querySelector(
                    "#jkanban-info-modal #jkanban-task-description"
                );
                KanbanTest.replaceElement(jkanbanInfoModalTaskId.value, {
                    title: jkanbanInfoModalTaskTitle.value,
                    assignee: jkanbanInfoModalTaskAssignee.value,
                    description: jkanbanInfoModalTaskDescription.value
                });
                jkanbanInfoModalTaskId.value = jkanbanInfoModalTaskId.value;
                jkanbanInfoModalTaskTitle.value = jkanbanInfoModalTaskTitle.value;
                jkanbanInfoModalTaskAssignee.value = jkanbanInfoModalTaskAssignee.value;
                jkanbanInfoModalTaskDescription.value = jkanbanInfoModalTaskDescription.value;
                document.querySelector('#jkanban-info-modal').classList.remove('show');
                document.querySelector('body').classList.remove('modal-open');
                document.querySelector('.modal-backdrop').remove();


            });
        }
    })();
</script>

<script>
    if (document.getElementById('choices-country')) {
        var country = document.getElementById('choices-country');
        const example = new Choices(country);
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };
</script>

<script>
    // Line chart
    var ctx1 = document.getElementById("line-chart").getContext("2d");

    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Organic Search",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#5e72e4",
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6
                },
                {
                    label: "Referral",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#3A416F",
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                },
                {
                    label: "Direct",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#17c1e8",
                    borderColor: "#17c1e8",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 10,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });

    // Line chart with gradient
    var ctx2 = document.getElementById("line-chart-gradient").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                },
                {
                    label: "Websites",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 10,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });

    // Doughnut chart
    var ctx3 = document.getElementById("doughnut-chart").getContext("2d");

    new Chart(ctx3, {
        type: "doughnut",
        data: {
            labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
            datasets: [{
                label: "Projects",
                weight: 9,
                cutout: 60,
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                data: [15, 20, 12, 60, 20],
                fill: false
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
            },
        },
    });

    // Pie chart
    var ctx4 = document.getElementById("pie-chart").getContext("2d");

    new Chart(ctx4, {
        type: "pie",
        data: {
            labels: ['Facebook', 'Direct', 'Organic', 'Referral'],
            datasets: [{
                label: "Projects",
                weight: 9,
                cutout: 0,
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ['#17c1e8', '#5e72e4', '#3A416F', '#a8b8d8'],
                data: [15, 20, 12, 60],
                fill: false
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
            },
        },
    });

    // Bar chart
    var ctx5 = document.getElementById("bar-chart").getContext("2d");

    new Chart(ctx5, {
        type: "bar",
        data: {
            labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
            datasets: [{
                label: "Sales by age",
                weight: 5,
                borderWidth: 0,
                borderRadius: 4,
                backgroundColor: '#3A416F',
                data: [15, 20, 12, 60, 20, 15],
                fill: false,
                maxBarThickness: 35
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: true,
                        drawTicks: true,
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                },
            },
        },
    });

    // Bar chart horizontal
    var ctx6 = document.getElementById("bar-chart-horizontal").getContext("2d");

    new Chart(ctx6, {
        type: "bar",
        data: {
            labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
            datasets: [{
                label: "Sales by age",
                weight: 5,
                borderWidth: 0,
                borderRadius: 4,
                backgroundColor: '#3A416F',
                data: [15, 20, 12, 60, 20, 15],
                fill: false
            }],
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: true,
                        drawTicks: true,
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                },
            },
        },
    });

    // Mixed chart
    var ctx7 = document.getElementById("mixed-chart").getContext("2d");

    new Chart(ctx7, {
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    type: "bar",
                    label: "Organic Search",
                    weight: 5,
                    tension: 0.4,
                    borderWidth: 0,
                    pointBackgroundColor: "#3A416F",
                    borderColor: "#3A416F",
                    backgroundColor: '#3A416F',
                    borderRadius: 4,
                    borderSkipped: false,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 10,
                },
                {
                    type: "line",
                    label: "Referral",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    pointBackgroundColor: "#5e72e4",
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    fill: true,
                }
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 10,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });

    // Bubble chart
    var ctx8 = document.getElementById("bubble-chart").getContext("2d");

    new Chart(ctx8, {
        type: "bubble",
        data: {
            labels: ['0', '10', '20', '30', '40', '50', '60', '70', '80', '90'],
            datasets: [{
                    label: 'Dataset 1',
                    data: [{
                        x: 100,
                        y: 0,
                        r: 10
                    }, {
                        x: 60,
                        y: 30,
                        r: 20
                    }, {
                        x: 40,
                        y: 350,
                        r: 10
                    }, {
                        x: 80,
                        y: 80,
                        r: 10
                    }, {
                        x: 20,
                        y: 30,
                        r: 15
                    }, {
                        x: 0,
                        y: 100,
                        r: 5
                    }],
                    backgroundColor: '#5e72e4',
                },
                {
                    label: 'Dataset 2',
                    data: [{
                        x: 70,
                        y: 40,
                        r: 10
                    }, {
                        x: 30,
                        y: 60,
                        r: 20
                    }, {
                        x: 10,
                        y: 300,
                        r: 25
                    }, {
                        x: 60,
                        y: 200,
                        r: 10
                    }, {
                        x: 50,
                        y: 300,
                        r: 15
                    }, {
                        x: 20,
                        y: 350,
                        r: 5
                    }],
                    backgroundColor: '#3A416F',
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 10,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });

    // Radar chart
    var ctx9 = document.getElementById("radar-chart").getContext("2d");

    new Chart(ctx9, {
        type: "radar",
        data: {
            labels: ["English", "Maths", "Physics", "Chemistry", "Biology", "History"],
            datasets: [{
                label: "Student A",
                backgroundColor: "rgba(58,65,111,0.2)",
                data: [65, 75, 70, 80, 60, 80],
                borderDash: [5, 5],
            }, {
                label: "Student B",
                backgroundColor: "rgba(203,12,159,0.2)",
                data: [54, 65, 60, 70, 70, 75]
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            }
        }
    });

    // Radar chart
    var ctx10 = document.getElementById("polar-chart").getContext("2d");

    new Chart(ctx10, {
        type: "polarArea",
        data: {
            labels: [
                'Red',
                'Green',
                'Yellow',
                'Grey',
                'Blue'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [11, 16, 7, 3, 14],
                backgroundColor: ['#17c1e8', '#5e72e4', '#3A416F', '#a8b8d8', '#82d616'],
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            }
        }
    });
</script>