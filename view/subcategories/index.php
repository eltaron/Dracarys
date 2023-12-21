<?php include_once '../includes/header.php'; ?>
<div class="row justify-content-end">
    <?php include_once '../includes/sidebar.php'; ?>
    <div class="col-9">
        <div class="container px-4">
            <div class="table-responsive">
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد الالكتروني</th>
                            <th>رقم الهاتف</th>
                            <th>العمر</th>
                            <th>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        الاعدادات
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">تقرير</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit">تعديل</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete">حذف</a></li>
                                    </ul>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="old">61</span></td>
                            <td>2011-04-25</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td><span>Tokyo</span></td>
                            <td><span class="old">63</span></td>
                            <td>2011-07-25</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="old">66</span></td>
                            <td>2009-01-12</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="young">22</span></td>
                            <td>2012-03-29</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td><span>Tokyo</span></td>
                            <td><span class="young">33</span></td>
                            <td>2008-11-28</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td><span>New York</span></td>
                            <td><span class="old">61</span></td>
                            <td>2012-12-02</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="old">59</span></td>
                            <td>2012-08-06</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td><span>Tokyo</span></td>
                            <td><span class="old">55</span></td>
                            <td>2010-10-14</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="middleaged">39</span></td>
                            <td>2009-09-15</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="young">23</span></td>
                            <td>2008-12-13</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td><span>London</span></td>
                            <td><span class="young">30</span></td>
                            <td>2008-12-19</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="young">22</span></td>
                            <td>2013-03-03</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="middleaged">36</span></td>
                            <td>2008-10-16</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">43</span></td>
                            <td>2012-12-18</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td><span>London</span></td>
                            <td><span class="young">19</span></td>
                            <td>2010-03-17</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td><span>London</span></td>
                            <td><span class="old">66</span></td>
                            <td>2012-11-27</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td><span>New York</span></td>
                            <td><span class="old">64</span></td>
                            <td>2010-06-09</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td><span>New York</span></td>
                            <td><span class="old">59</span></td>
                            <td>2009-04-10</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">41</span></td>
                            <td>2012-10-13</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="middleaged">35</span></td>
                            <td>2012-09-26</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td><span>New York</span></td>
                            <td><span class="young">30</span></td>
                            <td>2011-09-03</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td><span>New York</span></td>
                            <td><span class="middleaged">40</span></td>
                            <td>2009-06-25</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td><span>New York</span></td>
                            <td><span class="young">21</span></td>
                            <td>2011-12-12</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td><span>Sydney</span></td>
                            <td><span class="young">23</span></td>
                            <td>2010-09-20</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">47</span></td>
                            <td>2009-10-09</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="middleaged">42</span></td>
                            <td>2010-12-22</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td><span>Singapore</span></td>
                            <td><span class="young">28</span></td>
                            <td>2010-11-14</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="young">28</span></td>
                            <td>2011-06-07</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="middleaged">48</span></td>
                            <td>2010-03-11</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td><span>Tokyo</span></td>
                            <td><span class="young">20</span></td>
                            <td>2011-08-14</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td><span>Sydney</span></td>
                            <td><span class="middleaged">37</span></td>
                            <td>2011-06-02</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">53</span></td>
                            <td>2009-10-22</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td><span>London</span></td>
                            <td><span class="young">27</span></td>
                            <td>2011-05-07</td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="young">22</span></td>
                            <td>2008-10-26</td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="middleaged">46</span></td>
                            <td>2011-03-09</td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="middleaged">47</span></td>
                            <td>2009-12-09</td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="middleaged">51</span></td>
                            <td>2008-12-16</td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="middleaged">41</span></td>
                            <td>2010-02-12</td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="old">62</span></td>
                            <td>2009-02-14</td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">37</span></td>
                            <td>2008-12-11</td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td><span>New York</span></td>
                            <td><span class="old">65</span></td>
                            <td>2008-09-26</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td><span>Singapore</span></td>
                            <td><span class="old">64</span></td>
                            <td>2011-02-03</td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">38</span></td>
                            <td>2011-05-03</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td><span>Tokyo</span></td>
                            <td><span class="middleaged">37</span></td>
                            <td>2009-08-19</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td><span>New York</span></td>
                            <td><span class="old">61</span></td>
                            <td>2013-08-11</td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="middleaged">47</span></td>
                            <td>2009-07-07</td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td><span>Singapore</span></td>
                            <td><span class="old">64</span></td>
                            <td>2012-04-09</td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td><span>New York</span></td>
                            <td><span class="old">63</span></td>
                            <td>2010-01-04</td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="old">56</span></td>
                            <td>2012-06-01</td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="middleaged">43</span></td>
                            <td>2013-02-01</td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td><span>New York</span></td>
                            <td><span class="middleaged">46</span></td>
                            <td>2011-12-06</td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">47</span></td>
                            <td>2011-03-21</td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td><span>London</span></td>
                            <td><span class="young">21</span></td>
                            <td>2009-02-27</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td><span>San Francisco</span></td>
                            <td><span class="young">30</span></td>
                            <td>2010-07-14</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td><span>Edinburgh</span></td>
                            <td><span class="middleaged">51</span></td>
                            <td>2008-11-13</td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td><span>Singapore</span></td>
                            <td><span class="young">29</span></td>
                            <td>2011-06-27</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td><span>New York</span></td>
                            <td><span class="young">27</span></td>
                            <td>2011-01-25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once '../includes/footer.php'; ?>