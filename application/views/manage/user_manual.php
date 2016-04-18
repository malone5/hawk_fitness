<div class="container-fluid">
    <div class="row text-center">
        <h1>User Manual</h1>
    </div>
    <hr>
    <div class="manual-container">
      <?php if($this->session->userdata('logged_in')['role'] == 'admin'){?>
      <div class="admin-manual">
        <h3  dir="ltr">
            Administrator Workflow
        </h3>
        <p class="workflow" dir="ltr">
            The HawkFitness admin panel functionality allows the administrator to create and manage fitness classes and present them in the weekly schedule on the
            HawkFitness homepage.
        </p>
        <ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Administrator Login
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        Navigate to the HawkFitness website.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the blue ‘Administration’ button located in the bottom right of the homepage.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click in the username box and enter your username.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click in the password box and enter your password.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click ‘Login’.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Change Administrator Password
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        On the Administrative Homepage, click User Account in the top right corner.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Select “Change Password” button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Enter old password in the first field.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Enter new password in the second field. Enter new password again in the third field.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Select “Change Password” button.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Open Participant Check In Form
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the blue ‘Manage’ button in the bottom right of the homepage.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the green ‘Check In’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                       <strong>NOTE: Check ins are only availiable for the current day</strong>
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Adding Classes
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the blue ‘Manage’ button in the bottom right of the homepage.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the blue ‘Manage Classes’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the green ‘Create New Fitness Class’ form.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click ‘Select Class’ and from the dropdown select a class type to create.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Enter all required information in the ‘Create New Fitness Class’ form.
                    </p>
                </li>
                <ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            Instructor
                        </p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">
                            Location
                        </p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">
                            Start Time
                        </p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">
                            Select Date
                        </p>
                    </li>
                </ol>
                <li dir="ltr">
                    <p dir="ltr">
                        Click ‘Add Class’.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Edit Class
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the blue ‘Manage Classes’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the blue ‘Edit’ button to the right of the class.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Make changes to the class as needed.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the blue ‘update’ button to save changes.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Delete A Class
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the blue ‘Manage Classes’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the red ‘Delete’ button to the right of the class.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        An alert will pop up that asking “Are you sure you want to delete: [chosen class].
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the green ‘Yes’ to delete, ‘No’ to go back to the previous screen.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Delete Entire Class List
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the blue ‘Manage Classes’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Next to ‘Batch Delete’ change the selection from ‘OFF’ to ‘ON’.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Under the ‘Delete’ heading to the right of each class, select as many classes as you wish to delete.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the red ‘Delete Selected’ button and all selected classes will be deleted.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Create New Class Types
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the orange ‘Manage Class Types’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the green ‘Create New Class Type’ button on the bottom left of the class type list..
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Enter a class name in the ‘Class Type’ box.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Underneath write a description of the class type.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click ‘Add Class Type’.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Edit Class Types
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the orange ‘Manage Class Types’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the blue ‘Edit’ button to the right of the class you wish to edit.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Make changes to the class title and/or description as needed.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the green ‘Submit’ button to save.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Delete Class Types
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the orange ‘Manage Class Types’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the red ‘Delete’ button to the right of the class.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        An alert will pop up that asking “Are you sure you want to delete the [chosen class type] class type?.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the green ‘Yes’ to delete, ‘No’ to go back to the previous screen.
                    </p>
                </li>
            </ol>
        </ol>
        <br/>
        <ol start="11">
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Generate Reports
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click on the red ‘Generate Reports’ button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Select a date range for your report by clicking inside the ‘Min Date’ text box and pick your starting date. Then click inside the ‘Max Date’
                        text box and pick your maximum date.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Chose the number of entries you wish to display on the page by selecting ‘10, 25, 50, or 100” from the ‘Show[10] entries dropdown at the top of
                        the report.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Filter your generated report columns in two ways”
                    </p>
                </li>
                <ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            By Search
                        </p>
                    </li>
                    <ol>
                        <li dir="ltr">
                            <p dir="ltr">
                                Click in a ‘Filter’ text box at the bottom of the column you wish to search.
                            </p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr">
                                Write in the date/class/name/Email/Student ID/Academic Level/Type you wish to search for.
                            </p>
                        </li>
                    </ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            By Order
                        </p>
                    </li>
                    <ol>
                        <li dir="ltr">
                            <p dir="ltr">
                                Select the light grey ‘up/down arrow’ icon next to the column you wish to filter.
                            </p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr">
                                Select the button again to change the filter direction.
                            </p>
                        </li>
                    </ol>
                </ol>
                <li dir="ltr">
                    <p dir="ltr">
                        The user has several options for saving their generated report:
                    </p>
                </li>
                <ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            Download
                        </p>
                    </li>
                    <ol>
                        <li dir="ltr">
                            <p dir="ltr">
                                Chose the download file type by selecting either the ‘CSV’, ‘Excel’, or ‘PDF’ buttons at the top of the report.
                            </p>
                        </li>
                    </ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            Copy
                        </p>
                    </li>
                    <ol>
                        <li dir="ltr">
                            <p dir="ltr">
                                Select the ‘Copy’ button at the top of the report.
                            </p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr">
                                A popup with further instructions will be displayed.
                            </p>
                        </li>
                    </ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            Print
                        </p>
                    </li>
                    <ol>
                        <li dir="ltr">
                            <p dir="ltr">
                                Select the ‘Print’ button at the top of the report.
                            </p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr">
                                A print friendly version of the report will be displayed with printing options.
                            </p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr">
                                Select ‘Print’
                            </p>
                        </li>
                    </ol>
                </ol>
            </ol>
        </ol>
        <br/>
        <ol start="12">
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Edit Profile
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        On the upper right corner of the screen click on the downward arrow next to the black icon.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        On the dropdown select ‘User Profile’.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Modify any information that is warranted.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click ‘Submit’.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Email List
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User must be logged in. [See Administrator Login]
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the 'Email List' button from the left menu.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the Min. Date box and select a date. Click the arrows at the top of the calendar to move one month backwards or forwards.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click the Max. Date box and select a date.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Click 'Get Email List' button.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        A list of emails will generate in the box below.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        Select all the emails, then right-click the mouse, then select 'Copy'. Paste list into the  "To:" section of a new e-mail.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Logout
                </p>
            </li>
        </ol>
        <br/>
        <ol>
            <li dir="ltr">
                <p dir="ltr">
                    User must be logged in. [See Adminstrator Login]
                </p>
            </li>
            <li dir="ltr">
                <p dir="ltr">
                    Navigate to the Monmouth University Fitness homepage.
                </p>
            </li>
            <li dir="ltr">
                <p dir="ltr">
                    On the lower right corner of the homepage click on the blue ‘Logout’ button.
                </p>
            </li>
        </ol>
      </div>
      <?php }else{?>
      <div class="student-manual">
        <p class="task" dir="ltr">
            Monmouth Student / Faculty / Alumni Workflows
        </p>
        <p class="workflow" dir="ltr">
            The workflows for Monmouth Students, faculty, and alumni HawkFitness allows the users the ability to share the weekly fitness schedule over social media as
            well as provides a check-in form for class participants to sign in to their fitness classes.
        </p>
        <ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Fitness Class Participant Check In
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        Enter all required fields including:
                    </p>
                </li>
                <ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            Full Name. Must be 30 characters or less.
                        </p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">
                            Email Address. Must be 30 characters or less.
                        </p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">
                            Student ID without the 's' prefix. Must be 8 characters. Optional field which can be left blank.
                        </p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">
                            Member Type. Choose between Student, Alumni or Faculty. Click on one of the options. A green check will denote your selection. IF Student is selected, then select an academic level.
                            </br>
                            </br>
                            NOTE: Academic level is optional. Alumni and Faculty cannot select academic level.
                        </p>
                    </li>
                </ol>
                <li dir="ltr">
                    <p dir="ltr">
                        Click ‘Sign in’.
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr">
                        A pop-up success message should display.
                    </p>
                </li>
            </ol>
            <li class="task" dir="ltr">
                <p dir="ltr">
                    Social Media Share Buttons
                </p>
            </li>
            <ol>
                <li dir="ltr">
                    <p dir="ltr">
                        User can select Facebook, Twitter, Google+, or Pinterest share options.
                    </p>
                </li>
                <ol>
                    <li dir="ltr">
                        <p dir="ltr">
                            Navigate to the HawkFitness homepage.
                        </p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">
                            Above the weekly schedule, click any social media icon to share the weekly fitness schedule with your Facebook friends.
                        </p>
                    </li>
                </ol>
            </ol>
        </ol>
      </div>
      <?php }?>
    </div>
