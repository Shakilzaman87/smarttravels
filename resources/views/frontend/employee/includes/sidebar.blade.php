
    <ul>
        <li>
            <a href="{{url('employeehome')}}"><img src="assets/frontend/images/icon/dbl1.png" alt="" /> Profile </a>
        </li>
        <li>
            <a href="{{url('employeetasks')}}"><img src="assets/frontend/images/icon/dbl2.png" alt=""/> Task List </a>
        </li>
        <li>
            <a href="{{url('employeeattendences')}}"><img src="assets/frontend/images/icon/dbl2.png" alt=""/> Attendence </a>
        </li>
        <li>
            <a href="{{url('employeeexpense')}}"><img src="assets/frontend/images/icon/dbl3.png" alt="" /> Expense </a>
        </li>
        <li>
            <a href="{{url('employeeprofileedit')}}"><img src="assets/frontend/images/icon/dbl4.png" alt="" /> Settings </a>
        </li>
        <li style="margin-left:12px">
            <a href="{{ url('employeelogout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('employeelogout') }}" method="POST">
                {{ csrf_field() }}
            </form>
        </li>

    </ul>
