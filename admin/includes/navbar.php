<div class="dashboard-page-one">
    <!-- Sidebar Area Start Here -->
    <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
       <div class="mobile-sidebar-header d-md-none">
            <div class="header-logo">
                <a href="index.php"><img src="img/logo1.png" alt="logo"></a>
            </div>
       </div>


       <?php

       if ( $_SESSION['user'] == 'admin' ) {

       ?>
        <div class="sidebar-menu-content">
            <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                <!-- <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="index3.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="index4.php" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                        </li>
                        <li class="nav-item">
                            <a href="index5.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Teachers</a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-student.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Students</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="student-details.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Student Details</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="admit-form.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Admission Form</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="student-promotion.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Student Promotion</a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Teachers</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="teacher-details.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Teacher Details</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="add-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a href="assign-subject.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Assign Subject</a>
                        </li>
                        <li class="nav-item">
                            <a href="assign-class.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Assign Class</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="teacher-payment.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Payment</a>
                        </li> -->
                    </ul>
                </li>
                <!-- <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Parents</a>
                        </li>
                        <li class="nav-item">
                            <a href="parents-details.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Parents Details</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Parent</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-book.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Book</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-book.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                Book</a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-fees.php" class="nav-link"><i class="fas fa-angle-right"></i>All Fees
                                Collection</a>
                        </li>
                        <li class="nav-item">
                            <a href="all-expense.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Expenses</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Expenses</a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-class.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Classes</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-class.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                Class</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="all-subject.php" class="nav-link"><i
                            class="flaticon-open-book"></i><span>Subject</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                            Routine</span></a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="student-attendence.php" class="nav-link"><i
                            class="flaticon-checklist"></i><span>Attendence</span></a>
                </li> -->
                <!-- <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                Grades</a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="transport.php" class="nav-link"><i
                            class="flaticon-bus-side-view"></i><span>Transport</span></a>
                </li>
                <li class="nav-item">
                    <a href="hostel.php" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                </li> -->
                <li class="nav-item">
                    <a href="notice-board.php" class="nav-link"><i
                            class="flaticon-script"></i><span>Notice</span></a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Events</span></a>
                    <ul class="nav sub-group-menu">
                        <!-- <li class="nav-item">
                            <a href="all-event.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Events</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="add-event.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                Event</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a href="messaging.php" class="nav-link"><i
                            class="flaticon-chat"></i><span>Messeage</span></a>
                </li> -->
                <!-- <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="button.php" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                        </li>
                        <li class="nav-item">
                            <a href="grid.php" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                        </li>
                        <li class="nav-item">
                            <a href="ui-tab.php" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                        </li>
                        <li class="nav-item">
                            <a href="progress-bar.php" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Progress Bar</a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="map.php" class="nav-link"><i
                            class="flaticon-planet-earth"></i><span>Map</span></a>
                </li> -->
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Website</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="quote.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Quote</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link"><i class="fas fa-angle-right"></i>Add About</a>
                        </li>
                        <li class="nav-item">
                            <a href="vision.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Mission / Vision</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-gallery.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Gallery Photo</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="change-pass.php" class="nav-link"><i
                            class="flaticon-settings"></i><span>Account</span></a>
                </li>
            </ul>
            <?php
          }

             ?>

             <?php
             if ( $_SESSION['user'] == 'student' ) {
             ?>

             <div class="sidebar-menu-content">
                 <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                   <li class="nav-item">
                       <a href="notice-board.php" class="nav-link"><i
                               class="flaticon-script"></i><span>Notice</span></a>
                   </li>
                     <li class="nav-item">
                         <a href="all-subject.php" class="nav-link"><i
                                 class="flaticon-open-book"></i><span>My Subjects</span></a>
                     </li>
                     <!-- <li class="nav-item">
                         <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                                 Routine</span></a>
                     </li> -->
                     <!-- <li class="nav-item">
                         <a href="student-attendence.php" class="nav-link"><i
                                 class="flaticon-checklist"></i><span>Attendence</span></a>
                     </li>
                     <li class="nav-item sidebar-nav-item">
                         <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                         <ul class="nav sub-group-menu">
                             <li class="nav-item">
                                 <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                     Schedule</a>
                             </li>
                             <li class="nav-item">
                                 <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                     Grades</a>
                             </li>
                         </ul>
                     </li> -->
                     <li class="nav-item">
                         <a href="all-teacher.php" class="nav-link"><i
                                 class="flaticon-multiple-users-silhouette"></i><span>My Teachers</span></a>

                     </li>
                     <li class="nav-item">
                         <a href="change-pass.php" class="nav-link"><i
                                 class="flaticon-settings"></i><span>Account</span></a>
                     </li>
                 </ul>
                 <?php
                  }

                  ?>
                  <?php

                  if ( $_SESSION['user'] == 'teacher' ) {

                  ?>
                   <div class="sidebar-menu-content">
                       <ul class="nav nav-sidebar-menu sidebar-toggle-view">

                           <!-- <li class="nav-item sidebar-nav-item">
                               <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                               <ul class="nav sub-group-menu">
                                   <li class="nav-item">
                                       <a href="all-student.php" class="nav-link"><i class="fas fa-angle-right"></i>My Students</a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="student-details.php" class="nav-link"><i class="fas fa-angle-right"></i>Student Details</a>
                                   </li>
                               </ul>
                           </li> -->
                           <li class="nav-item">
                               <a href="all-class.php" class="nav-link"><i
                                       class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>My Class</span></a>
                               <!-- <ul class="nav sub-group-menu">
                                   <li class="nav-item">
                                       <a href="all-class.php" class="nav-link"><i class="fas fa-angle-right"></i>My
                                           Classes</a>
                                   </li>
                               </ul> -->
                           </li>
                           <li class="nav-item">
                               <a href="all-subject.php" class="nav-link"><i class="flaticon-open-book"></i><span>Subject</span></a>
                           </li>
                           <!-- <li class="nav-item">
                               <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class Routine</span></a>
                           </li>
                           <li class="nav-item">
                               <a href="student-attendence.php" class="nav-link"><i
                                       class="flaticon-checklist"></i><span>Attendence</span></a>
                           </li>
                           <li class="nav-item sidebar-nav-item">
                               <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                               <ul class="nav sub-group-menu">
                                   <li class="nav-item">
                                       <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam Schedule</a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam Grades</a>
                                   </li>
                               </ul>
                           </li> -->

                           <!-- <li class="nav-item">
                               <a href="notice-board.php" class="nav-link"><i
                                       class="flaticon-script"></i><span>Notice</span></a>
                           </li> -->
                           <li class="nav-item">
                               <a href="change-pass.php" class="nav-link"><i
                                       class="flaticon-settings"></i><span>Account</span></a>
                           </li>
                       </ul>
                       <?php
                     }

                        ?>

        </div>
    </div>
    <!-- Sidebar Area End Here -->
