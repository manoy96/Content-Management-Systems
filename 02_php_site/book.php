<?php
$title="Book Your Cruise";
include '_top.php';
?>

<!-- ----------------CONTENT--------------------- -->
<h1>Book Your Cruise</h1>

<form action="" method="post" class="bookForm">
    <div class="fullName">
        <section class="first">
            <label><span>First Name</span>
                <input type="text" name="First" placeholder="First" required>
            </label>
        </section>

        <section class="last">
            <label><span>Last Name</span>
                <input type="text" name="First" placeholder="Last" required>
            </label>
        </section>
    </div>
    

    <section class="book">
        <label><span>Address</span>
            <input type="text" name="address" placeholder="123 main st">
        </label>
    </section>

    <section class="book">
        <label><span>City</span>
            <input type="text" name="First" placeholder="City">
        </label>
    </section>
    <div class="stateZip">
        <section class="state">
            <label><span>State</span>
                <select name="state" id="state">
                    <option value="" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </label>
        </section>

        <section class="zip">
            <label><span>Zipcode</span>
                <input type="number" name="zipcode" placeholder="12345">
            </label>
        </section>
    </div>
    

    <section class="book">
        <label><span>Phone</span>
            <input type="tel" name="phone" placeholder="5555555555">
        </label>
    </section>

    <section class="book">
        <label><span>Email</span>
            <input type="email" name="email" placeholder="john@appleseed.com" required>
        </label>
    </section>

    <section class="book">
        <label><span>Select a Cruise</span>
            <select name="cruise" class="selectCruise">
                <option value="" selected="selected">Select a Cruise</option>
                <option value="Caribbean">Caribbean</option>
                <option value="Havana">Havana</option>
                <option value="Mexico">Mexico</option>
                <option value="Bahamas">Bahamas</option>
            </select>
        </label>
    </section>

    <input type="submit" value="Book My Cruise">
</form>


    



<?php
include '_bot.php';
?>