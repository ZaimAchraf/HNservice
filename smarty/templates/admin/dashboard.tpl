{extends file="admin/admin-master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/dashboard.css">
{/block}
{block name="title"}
    Dashboard-admin
{/block}
{block name="main"}

            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>{$data.nbr_services}</h1>
                        <span>Services</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>{$data.nbr_commands}</h1>
                        <span>Commands</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>{$data.nbr_employees}</h1>
                        <span>Employee</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single main-background">
                    <div>
                        <h1 class="text-white">{$data.nbr_managers}</h1>
                        <span class="text-white">Manager</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet text-white"></span>
                    </div>
                </div>

            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Projects</h3>
                            <button class="main-background">See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Project Title</td>
                                        <td>Department</td>
                                        <td>Status</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>We development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in Progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>We development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in Progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>We development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in Progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Customers</h3>
                            <button class="main-background">See All <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">

                            {foreach $data.employees as $employee}
                                {strip}
                                    <div class="customer">
                                        <div class="infos" >
                                            <img src="/Storage/uploads/employees/{$employee.picture}" width="40px" height="40px" alt="">
                                            <div>
                                                <h4>{$employee.fullName}</h4>
                                                <small>{$employee.title_en}</small>
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <span class="las la-user-circle color-main"></span>
                                            <span class="las la-comment color-main"></span>
                                            <span class="las la-phone color-main"></span>
                                        </div>
                                    </div>
                                {/strip}
                            {/foreach}
                            <div class="customer">
                                <div class="infos" >
                                    <img src="img.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Zaim houssam</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle color-main"></span>
                                    <span class="las la-comment color-main"></span>
                                    <span class="las la-phone color-main"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="infos" >
                                    <img src="img.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Zaim houssam</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle color-main"></span>
                                    <span class="las la-comment color-main"></span>
                                    <span class="las la-phone color-main"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="infos" >
                                    <img src="img.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Zaim houssam</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle color-main"></span>
                                    <span class="las la-comment color-main"></span>
                                    <span class="las la-phone color-main"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{/block}
{block name="scripts"}
{/block}