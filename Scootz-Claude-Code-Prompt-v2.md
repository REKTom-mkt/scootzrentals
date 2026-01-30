# Scootz Mobility Scooter Rentals - Claude Code Implementation Prompt

## Project Overview

**Client:** Scootz Mobility Scooter Rentals  
**Website:** scootzrentals.com  
**Task:** Create 4 new service pages, fix existing page issues, implement schema markup sitewide

The full website files are on my desktop. You have access to the complete directory.

---

## Your Role

You are a world-class front-end developer and SEO expert who builds clean, fast, accessible websites for local small businesses. You have perfectionist standards and take pride in delivering production-ready code.

**Your approach:**
- Analyze before building - understand the existing codebase first
- Match existing patterns exactly - never invent new designs
- Use the complete content provided below - do not rewrite or summarize
- Validate everything - schema, meta tags, links

---

## Phase 1: Discovery (Do This First)

Before creating anything, explore the directory and report back:

1. List all HTML files to identify existing page types
2. Open these specific pages to use as templates:
   - index.html (homepage)
   - rentals.html (main rentals page)
   - our-fleet.html (product/service page)
   - about.html (content page structure)
   - faqs.html (FAQ structure)
3. Document the structure you find:
   - Header/navigation pattern and all nav items
   - Main content sections and their CSS classes
   - Footer structure
   - How CTAs are styled (buttons, phone links)
   - CSS file location(s)
   - Image folder structure
   - Any existing schema markup
4. Pull these specific details to insert into the content below:
   - Exact pricing for each scooter model (daily rates, multi-day rates)
   - Scooter model names and specifications (weight capacity, battery range, dimensions)
   - Any existing CTA button text and styling

**Confirm your findings before proceeding to Phase 2.**

---

## Phase 2A: Fix Existing Pages

### Homepage (index.html)

**Issue:** Missing H1 tag

**Fix:** Add this H1 as the main headline:

```html
<h1>Orlando Mobility Scooter Rentals with Free Delivery to Disney, Universal & All Orlando Hotels</h1>
```

Style to match the existing visual hierarchy. If there's currently a headline styled as a different element, convert it to an H1.

---

### Sales Page (sales.html)

**Issue:** Missing H1 tag

**Fix:** Add this H1:

```html
<h1>Mobility Scooters for Sale in Orlando, FL</h1>
```

---

### Rentals Page (rentals.html)

**Issue:** Thin content - page has mostly just a booking widget with minimal text

**Fix:** Add the following content while keeping the booking widget prominent. Place the booking widget after the opening section or in a sidebar position.

**ADD THIS CONTENT TO RENTALS.HTML:**

---

#### [H1 - Keep existing or update to:]
Mobility Scooter Rentals in Orlando

#### [Opening paragraph - add immediately after H1:]

Scootz delivers mobility scooters directly to your Orlando hotel, vacation rental, or private residence at no extra charge. Whether you're visiting Walt Disney World, Universal Orlando, Epic Universe, or any other Orlando attraction, your scooter will be waiting for you when you arrive. We've earned 631 five-star Google reviews by providing reliable scooters, responsive service, and the flexibility that theme park visitors need. Call us at (407) 270-9900 or book online to reserve your scooter today.

#### [H2: What's Included with Every Rental]

Every Scootz rental includes free delivery and pickup anywhere in the Orlando area. Your scooter arrives fully charged with an all-day battery designed for theme park use. We deliver to all Walt Disney World and Universal Orlando resort hotels, Good Neighbor hotels, vacation rentals, Airbnbs, and private homes throughout Orlando, Kissimmee, Lake Buena Vista, and Celebration. Unlike theme park rentals that stay within one park, your Scootz scooter goes wherever you go. Use it at multiple parks, at Disney Springs or CityWalk, at your resort pool, and anywhere else during your trip.

#### [H2: Our Scooter Options]

We offer several scooter models to match your needs. Visit our [Fleet page](/our-fleet.html) for complete specifications, photos, and pricing for each model. All our scooters feature comfortable seating, easy-to-use controls, and battery life that lasts a full day at the parks. If you're not sure which scooter is right for you, give us a call and we'll help you choose based on your plans and preferences.

#### [H2: Where We Deliver]

Scootz provides free delivery throughout the Orlando area:

**Walt Disney World Area:** All Disney resort hotels including Deluxe, Moderate, and Value resorts. Disney Vacation Club properties. Good Neighbor hotels on Hotel Plaza Boulevard. Vacation rentals and homes in Kissimmee, Celebration, and Lake Buena Vista.

**Universal Orlando Area:** All Loews hotels on Universal property including Portofino Bay, Hard Rock Hotel, Royal Pacific, Sapphire Falls, Cabana Bay, Aventura, and Endless Summer resorts. The new Epic Universe hotels. International Drive hotels and the Convention Center area.

**Greater Orlando:** SeaWorld area hotels. Orlando International Airport area. Private residences anywhere in the Orlando metro area.

#### [H2: How It Works]

Renting from Scootz takes just a few minutes. Book online or call (407) 270-9900 to reserve your scooter. Choose your model and rental dates, then provide your delivery location and preferred delivery time. We'll coordinate with you to deliver your scooter, typically to bell services at resort hotels or directly to your vacation rental. At the end of your rental, we pick up the scooter from the same location. No waiting in park rental lines. No returning a scooter at the end of each day. Your scooter stays with you for your entire rental period.

#### [H2: Questions?]

Visit our [FAQ page](/faqs.html) for answers to common questions about scooter rentals, delivery, theme park policies, and more. You can also call us at (407) 270-9900. We're available from 8 AM to 11 PM daily.

---

## Phase 2B: Create New Pages

### CONTENT IS COMPLETE AND READY TO USE

The content below is finished, production-ready copy. Do not summarize, rewrite, or convert to bullet points. Use this content exactly as written, formatted with proper HTML semantic elements.

**For each page:**
- Match the CSS classes and layout patterns from existing pages
- Style CTAs consistently with existing site buttons
- Insert the scooter specifications and pricing you found in Phase 1 where indicated with [BRACKETS]

---

## PAGE 1: disney-world-scooter-rentals.html

**File name:** disney-world-scooter-rentals.html

**Title tag (65 chars max):**
```
Disney World Scooter Rentals - Free Delivery | Scootz
```

**Meta description (155 chars max):**
```
Rent a mobility scooter for Disney World with free delivery to your resort. All-day battery, use at all 4 parks. 631 five-star reviews. Book now!
```

**Canonical URL:**
```
https://www.scootzrentals.com/disney-world-scooter-rentals.html
```

---

### PAGE 1 CONTENT:

# Disney World Scooter Rentals - Free Delivery to All Disney Resorts

Scootz delivers mobility scooters directly to your Walt Disney World resort hotel, nearby vacation rental, or Airbnb at no extra charge. Your scooter will be waiting when you arrive, fully charged and ready for a full day at the parks. Unlike Disney's in-park ECV rentals, your Scootz scooter stays with you throughout your entire trip. Use it at all four theme parks, Disney Springs, your resort, restaurants, and anywhere else you go. We've earned 631 five-star Google reviews from Disney visitors who appreciate our reliable scooters, free delivery, and responsive local service. Call (407) 270-9900 or book online to reserve your Disney World scooter rental.

## Quick Facts About Scootz Disney World Scooter Rentals

**Free delivery and pickup** to all Disney resort hotels, Good Neighbor hotels, and vacation rentals in the Disney area. **All-day battery life** designed for full theme park days. **Use at all 4 parks** plus Disney Springs, your resort, and off-property. **Multi-day rentals available** with discounts for longer stays. **631 five-star reviews** from Orlando visitors. **Locally owned** and operated from Orlando since [PULL YEAR FROM SITE IF AVAILABLE, OTHERWISE REMOVE THIS LINE]. **Available 8 AM to 11 PM daily** for delivery, pickup, and support.

## Common Questions About Renting a Scooter for Disney World

**Can I use my rental scooter at all four Disney parks?**

Yes. Unlike Disney's in-park ECV rentals that must stay within one park, your Scootz scooter goes wherever you go. Ride it at Magic Kingdom in the morning, take the bus to EPCOT for dinner, and keep it at your resort overnight. If you're park hopping, you never have to return one scooter and rent another.

**Can I take my scooter on Disney buses and the Monorail?**

Yes. Disney transportation accommodates mobility scooters on buses, the Monorail, boats, and the Skyliner gondolas. During peak times, you may occasionally need to wait for the next vehicle with available wheelchair and scooter space, but Disney cast members will assist you.

**How is Scootz different from renting at the parks?**

When you rent from Disney, you get an ECV that stays within that park. You return it when you leave and rent again the next day, waiting in line each morning. With Scootz, your scooter is delivered to your hotel before you even arrive at the parks. Keep it for your entire trip, use it everywhere on Disney property and beyond, and we pick it up when your vacation ends.

**Do I need a reservation, or can I get same-day delivery?**

We recommend booking in advance, especially during busy seasons, to guarantee availability of your preferred scooter model. However, we do offer same-day delivery when scooters are available. Call (407) 270-9900 to check availability for today.

**What if something goes wrong with my scooter?**

Call us immediately at (407) 270-9900. We're available 8 AM to 11 PM daily and will work quickly to resolve any issues. [IF SITE MENTIONS REPLACEMENT POLICY, ADD: We can deliver a replacement scooter if needed.]

## Where We Deliver for Disney World Visits

Scootz provides free delivery to every Disney World resort hotel and the surrounding area. We deliver to the Deluxe resorts including Grand Floridian, Contemporary, Polynesian Village, Wilderness Lodge, Beach Club, Yacht Club, BoardWalk Inn, and Animal Kingdom Lodge. We deliver to the Moderate resorts including Caribbean Beach, Coronado Springs, Port Orleans French Quarter, Port Orleans Riverside, and Fort Wilderness cabins. We deliver to the Value resorts including All-Star Movies, All-Star Music, All-Star Sports, Pop Century, and Art of Animation.

Beyond Disney property, we deliver to the Good Neighbor hotels on Hotel Plaza Boulevard, including the Wyndham, DoubleTree, and Hilton. We deliver to vacation rentals and Airbnbs throughout Kissimmee, Celebration, and Lake Buena Vista. We deliver to private homes in the Disney area. Wherever you're staying for your Disney trip, we'll bring your scooter to you.

## Our Scooter Options for Disney World

We offer several mobility scooter models to match different needs and preferences. All our scooters are designed for full-day theme park use with reliable batteries, comfortable seating, and smooth handling.

[PULL SCOOTER MODELS, SPECIFICATIONS, AND PRICING FROM /our-fleet.html AND INSERT HERE. FORMAT AS FOLLOWS:]

**[Model Name]**

[Description of the scooter, who it's best for]. Weight capacity: [X] lbs. Battery range: [X] miles, sufficient for all-day park use. [Any other key specs like turning radius, seat width, etc.]

Daily rental rate: $[XX]. Multi-day rates available.

[REPEAT FOR EACH SCOOTER MODEL]

All our scooters fit comfortably on Disney transportation, including buses, Monorail, boats, and Skyliner gondolas.

## Tips for Using a Mobility Scooter at Disney World

Disney World spans over 25,000 acres with four theme parks, two water parks, Disney Springs, and dozens of resort hotels. Even fit and active visitors often walk 20,000 to 30,000 steps per day at Disney. A mobility scooter lets you save your energy for the experiences that matter instead of exhausting yourself walking between attractions.

**At the attractions:** Most Disney rides have designated scooter parking near the entrance. You'll park your scooter, walk a short distance through the queue or use the accessible entrance, and experience the attraction. Some attractions allow you to remain in your wheelchair or ECV, while others require transferring to the ride vehicle. Disney's official accessibility guide lists the requirements for each attraction.

**At restaurants:** Table-service restaurants have space for scooters at most tables or nearby. Quick-service locations accommodate scooters in the dining areas. Disney cast members are accustomed to guests using mobility devices and will help you find appropriate seating.

**Getting around:** Disney property is massive, but the transportation system makes it manageable with a scooter. Buses, the Monorail, boats, and the Skyliner all accommodate mobility scooters. The only exception is the parking lot trams, which don't accommodate scooters, but you can park in designated accessible parking instead.

**Battery life:** Our scooters are designed for all-day use. A fully charged battery will easily last through a long day at the parks. For especially long days or heavy use, some guests like to bring the charger along and top off during a mid-day break at the resort.

## Why Rent a Scooter for Disney World?

Many people rent mobility scooters for Disney World vacations. Seniors who can walk short distances but not full theme park days find scooters essential for enjoying Disney without exhaustion. Visitors recovering from surgery, injury, or illness benefit from the ability to explore the parks without strain. Guests with arthritis, heart conditions, chronic pain, or other conditions that make extended walking difficult can experience Disney comfortably with a scooter.

You don't need a disability or diagnosis to rent a scooter. If you're concerned that walking miles through the parks will limit your enjoyment, a scooter is a practical solution. Many guests simply prefer to save their energy for the attractions and experiences rather than spending it on transportation between them.

## Book Your Disney World Scooter Rental

Reserve your scooter now to guarantee availability for your Disney World trip. Call (407) 270-9900 or [book online](/rentals.html). We deliver to your resort before you arrive at the parks, and we pick up when your vacation ends. With 631 five-star reviews from Disney visitors, Scootz is the trusted choice for mobility scooter rentals in Orlando.

---

## PAGE 2: universal-studios-scooter-rentals.html

**File name:** universal-studios-scooter-rentals.html

**Title tag (65 chars max):**
```
Universal Orlando Scooter Rentals - Free Delivery | Scootz
```

**Meta description (155 chars max):**
```
Mobility scooter rentals for Universal Studios, Islands of Adventure & CityWalk. Free delivery to Universal hotels. Book online or call today.
```

**Canonical URL:**
```
https://www.scootzrentals.com/universal-studios-scooter-rentals.html
```

---

### PAGE 2 CONTENT:

# Universal Orlando Scooter Rentals - Free Delivery to Universal Hotels

Scootz delivers mobility scooters directly to your Universal Orlando resort hotel or nearby vacation rental at no extra charge. Whether you're visiting Universal Studios Florida, Islands of Adventure, CityWalk, or the new [Epic Universe](/epic-universe-scooter-rentals.html), your scooter stays with you throughout your entire trip. We bring it to your hotel before you need it and pick it up when you're done. No waiting in rental lines at the parks. No returning your scooter at the end of each day. With 631 five-star Google reviews and same-day delivery available, Scootz is the trusted choice for Universal Orlando visitors. Call (407) 270-9900 or book online to reserve your scooter.

## Quick Facts About Scootz Universal Orlando Scooter Rentals

**Free delivery and pickup** to all Universal resort hotels and nearby hotels and vacation rentals. **All-day battery life** built for full theme park days. **Use at both parks plus CityWalk** and your resort, restaurants, and anywhere else. **Multi-day rentals available** with discounts for longer stays. **631 five-star reviews** from Orlando visitors. **Available 8 AM to 11 PM daily** for delivery, pickup, and support.

## Common Questions About Renting a Scooter for Universal Orlando

**Can I use my scooter at both Universal parks?**

Yes. Your Scootz rental goes wherever you go. Use it at Universal Studios Florida, Islands of Adventure, CityWalk, your resort, and anywhere else during your trip. Unlike park rentals that stay within one location, you keep your Scootz scooter for your entire rental period.

**Can I take my scooter on the Hogwarts Express?**

Yes. The Hogwarts Express train between Universal Studios Florida and Islands of Adventure accommodates mobility scooters. This is one of the big advantages of having your own scooter rather than a park rental. You can ride the Hogwarts Express between parks and keep your scooter with you the whole time.

**Do you deliver to International Drive hotels?**

Yes. We deliver to all Universal resort hotels on property, all International Drive hotels, Convention Center area hotels, and vacation rentals throughout the area. Wherever you're staying for your Universal trip, we'll bring your scooter to you.

**What about the new Epic Universe park?**

Yes, we provide scooter rentals for [Epic Universe](/epic-universe-scooter-rentals.html). Epic Universe is located on a separate campus from the original Universal Orlando Resort, but we deliver throughout the Orlando area. If you're visiting both Epic Universe and the original Universal parks, your Scootz rental works at all of them.

**How is this different from renting at Universal?**

Universal's in-park scooter rentals stay within that park. You return it when you leave and rent again each day. With Scootz, we deliver to your hotel before you arrive at the parks, you keep the scooter for your entire stay, and we pick it up when you're done. Use it at both parks, CityWalk, your hotel, restaurants, and off-property.

## Where We Deliver for Universal Orlando Visits

Scootz provides free delivery to every Universal Orlando resort hotel. We deliver to the Premier hotels including Loews Portofino Bay Hotel, Hard Rock Hotel, and Loews Royal Pacific Resort. We deliver to the Preferred hotels including Loews Sapphire Falls Resort. We deliver to the Prime Value hotels including Universal's Cabana Bay Beach Resort, Universal's Aventura Hotel, and both Endless Summer Resort properties.

We also deliver to the new Epic Universe hotels including Universal Helios Grand Hotel, Universal Stella Nova Resort, and Universal Terra Luna Resort. For guests staying off Universal property, we deliver to International Drive hotels, Convention Center area hotels, and vacation rentals throughout the Universal Orlando area.

## Our Scooter Options for Universal Orlando

We offer several mobility scooter models designed for theme park use. All feature comfortable seating, reliable all-day batteries, and smooth handling for navigating crowded park pathways.

[PULL SCOOTER MODELS, SPECIFICATIONS, AND PRICING FROM /our-fleet.html AND INSERT HERE. FORMAT AS FOLLOWS:]

**[Model Name]**

[Description of the scooter, who it's best for]. Weight capacity: [X] lbs. Battery range: [X] miles, sufficient for all-day park use. [Any other key specs.]

Daily rental rate: $[XX]. Multi-day rates available.

[REPEAT FOR EACH SCOOTER MODEL]

## Tips for Using a Mobility Scooter at Universal Orlando

Universal Orlando Resort includes Universal Studios Florida, Islands of Adventure, and CityWalk, all connected and walkable if you're staying at one of the on-site hotels. The parks feature a mix of wide pathways and narrower areas, especially in themed lands like The Wizarding World of Harry Potter.

**At the attractions:** Most Universal attractions have scooter parking near the entrance. You'll park your scooter, walk through the accessible queue or standard queue as appropriate, and experience the attraction. Some attractions have specific accessibility requirements, particularly thrill rides. Universal's official accessibility guide details the requirements for each attraction.

**The Wizarding World of Harry Potter:** The two Harry Potter areas span both parks. Hogsmeade is in Islands of Adventure, and Diagon Alley is in Universal Studios Florida. The Hogwarts Express connects them, and your scooter is welcome aboard. The pathways in both areas can get crowded, especially during peak times, but scooters navigate them regularly.

**CityWalk:** Universal's entertainment and dining district connects the two theme parks. Your scooter is welcome throughout CityWalk, at restaurants, and in the shops. The area is fully accessible.

**Transportation:** If you're staying at a Universal hotel, water taxis and walking paths connect you to the parks. Both accommodate scooters. The walking paths are well-maintained and mostly flat.

## Why Rent a Scooter for Universal Orlando?

The Wizarding World of Harry Potter alone involves significant walking between Hogsmeade and Diagon Alley. Add in the rest of both parks and CityWalk, and you're looking at miles of walking over a typical Universal vacation. A mobility scooter lets you experience everything without exhausting yourself.

Seniors, guests with mobility challenges, those recovering from surgery or injury, and anyone who wants to save their energy for the rides and experiences can benefit from a scooter rental. You don't need a diagnosis or documentation. If extended walking will limit your enjoyment of Universal, a scooter is a practical solution.

## Visiting Epic Universe Too?

Universal's newest park, [Epic Universe](/epic-universe-scooter-rentals.html), opened in May 2025 on a separate campus from the original Universal Orlando Resort. If your trip includes Epic Universe, your Scootz scooter works there too. One rental covers all Universal parks plus Disney, SeaWorld, and anywhere else you visit during your trip.

## Book Your Universal Orlando Scooter Rental

Reserve your scooter now for your Universal Orlando trip. Call (407) 270-9900 or [book online](/rentals.html). We deliver to your hotel before you arrive at the parks and pick up when your vacation ends. With 631 five-star reviews from Orlando visitors, Scootz is the trusted choice for mobility scooter rentals.

---

## PAGE 3: epic-universe-scooter-rentals.html

**File name:** epic-universe-scooter-rentals.html

**Title tag (65 chars max):**
```
Epic Universe Scooter Rentals - Free Delivery | Scootz
```

**Meta description (155 chars max):**
```
Mobility scooter rentals for Epic Universe, Universal's newest park. Free delivery to your hotel. All-day battery. Book now for Orlando's biggest park!
```

**Canonical URL:**
```
https://www.scootzrentals.com/epic-universe-scooter-rentals.html
```

---

### PAGE 3 CONTENT:

# Epic Universe Scooter Rentals - Free Delivery for Orlando's Newest Theme Park

Epic Universe opened in May 2025 as Universal's largest and most ambitious theme park, and Scootz delivers mobility scooters directly to your Epic Universe area hotel or any Orlando location. Your scooter will be waiting when you arrive, fully charged and ready for a full day exploring Universal's newest attraction. With multiple themed worlds spread across an expansive property, Epic Universe involves significant walking. A Scootz mobility scooter lets you experience everything without exhausting yourself before the day is over. We've earned 631 five-star Google reviews from Orlando visitors. Call (407) 270-9900 or book online to reserve your Epic Universe scooter rental.

## Quick Facts About Epic Universe and Scootz Scooter Rentals

**Epic Universe is Universal's largest park** with multiple themed worlds requiring significant walking between areas. **Free delivery and pickup** to all Epic Universe hotels and anywhere in the Orlando area. **All-day battery life** designed for full days at the parks. **Use beyond Epic Universe** at other Universal parks, Disney World, your hotel, and anywhere else. **Multi-day rentals available** with discounts for longer stays. **631 five-star reviews** from Orlando visitors. **Book early** as demand is high for Universal's newest park.

## Common Questions About Epic Universe Scooter Rentals

**How big is Epic Universe compared to other Universal parks?**

Epic Universe is Universal Orlando's largest theme park. The size and number of themed worlds make it comparable in scale to a major Disney park. You should expect a significant amount of walking to experience the park's attractions, shows, dining, and entertainment.

**Is Epic Universe connected to Universal Studios and Islands of Adventure?**

No. Epic Universe is located on a separate campus from the original Universal Orlando Resort. The two locations are not within walking distance of each other. If you're visiting both Epic Universe and the original Universal parks during your trip, you'll need transportation between them. Your Scootz scooter can be used at both locations, and we can deliver to whichever hotel you're staying at.

**Do you deliver to the new Epic Universe hotels?**

Yes. We deliver to all Universal hotels including Universal Helios Grand Hotel, Universal Stella Nova Resort, and Universal Terra Luna Resort near Epic Universe. We also deliver to the original Universal resort hotels and all other Orlando area hotels and vacation rentals.

**Can I use my scooter at Epic Universe and Disney World on the same trip?**

Absolutely. Your Scootz rental is yours for your entire rental period. Use it at Epic Universe, Universal Studios, Islands of Adventure, all four Disney World parks, Disney Springs, SeaWorld, or anywhere else you visit. One rental covers your whole Orlando vacation.

**Should I book my scooter early for Epic Universe?**

Yes. Epic Universe is Universal's newest and most anticipated park. Demand for scooter rentals is high, especially during Epic Universe's first year of operation. Book early to guarantee availability of your preferred scooter model for your dates.

## What to Know About Epic Universe

Epic Universe opened in May 2025 as Universal Orlando's third major theme park. Unlike Universal Studios Florida and Islands of Adventure, which share a campus, Epic Universe is located on a separate property. The park features multiple themed worlds including Super Nintendo World, The Wizarding World of Harry Potter - Ministry of Magic, How to Train Your Dragon - Isle of Berk, Dark Universe, and Celestial Park (the central hub area).

The scale of Epic Universe makes a mobility scooter especially valuable. Rather than concentrating attractions in a compact footprint, Epic Universe spreads its themed worlds across a larger area with significant walking between them. Visitors who have been to Universal's original parks should expect more walking at Epic Universe.

## Where We Deliver for Epic Universe Visits

Scootz provides free delivery to the Epic Universe resort hotels. Universal Helios Grand Hotel, Universal Stella Nova Resort, and Universal Terra Luna Resort are all within walking distance of Epic Universe's entrance, and we deliver to all of them. For guests staying elsewhere, we deliver to all original Universal resort hotels on the main campus, International Drive hotels, Disney area hotels, and vacation rentals throughout Orlando. Wherever you're staying for your Epic Universe visit, we'll bring your scooter to you.

## Our Scooter Options for Epic Universe

We offer several mobility scooter models designed for full-day theme park use. All feature reliable batteries, comfortable seating, and smooth handling for navigating park pathways.

[PULL SCOOTER MODELS, SPECIFICATIONS, AND PRICING FROM /our-fleet.html AND INSERT HERE. FORMAT AS FOLLOWS:]

**[Model Name]**

[Description of the scooter, who it's best for]. Weight capacity: [X] lbs. Battery range: [X] miles, sufficient for all-day park use. [Any other key specs.]

Daily rental rate: $[XX]. Multi-day rates available.

[REPEAT FOR EACH SCOOTER MODEL]

Given Epic Universe's size, we generally recommend scooters with longer battery range for guests who plan to spend full days at the park.

## Planning Your Epic Universe Visit with a Scooter

Epic Universe is a new park, and accessibility information is still developing. Based on Universal's track record at their other parks, you can expect designated scooter parking at attractions, accessible queues where appropriate, and cast members trained to assist guests with mobility devices.

The themed worlds at Epic Universe each have their own character and terrain. Some areas may have more hills, uneven surfaces, or narrow pathways than others. Our scooters handle varied terrain well, and Universal designs their parks to be accessible.

If you're visiting Epic Universe along with the original Universal parks or Disney World, your Scootz scooter works everywhere. Many guests staying near Epic Universe also plan days at Universal Studios Florida and Islands of Adventure or hop over to Disney property. One scooter rental covers all of it.

## Why Rent a Scooter for Epic Universe?

Epic Universe is Universal's biggest park, and that means more walking than Universal's other properties. Guests who might manage a day at Universal Studios Florida or Islands of Adventure without a scooter may find Epic Universe more challenging simply due to the distances involved. A scooter lets you experience all the themed worlds without wearing yourself out walking between them.

Seniors, guests with mobility challenges, those recovering from surgery or injury, and anyone who wants to save their energy for the attractions rather than spending it on walking can benefit from a scooter rental. You don't need a diagnosis or documentation. If you're concerned about the walking, a scooter is a practical solution.

## Book Your Epic Universe Scooter Rental

Reserve your scooter now for your Epic Universe trip. As Universal's newest park, demand is high, so book early to guarantee availability. Call (407) 270-9900 or [book online](/rentals.html). We deliver to your hotel before you arrive at the park and pick up when your vacation ends. With 631 five-star reviews from Orlando visitors, Scootz is the trusted choice for mobility scooter rentals.

---

## PAGE 4: ecv-rentals-orlando.html

**File name:** ecv-rentals-orlando.html

**Title tag (65 chars max):**
```
ECV Rentals Orlando - Electric Convenience Vehicles | Scootz
```

**Meta description (155 chars max):**
```
ECV rentals in Orlando with free delivery. Electric Convenience Vehicles for Disney, Universal, and all attractions. Better than park rentals. Book now!
```

**Canonical URL:**
```
https://www.scootzrentals.com/ecv-rentals-orlando.html
```

---

### PAGE 4 CONTENT:

# ECV Rentals Orlando - Electric Convenience Vehicle Rentals

If you're searching for ECV rentals in Orlando, you're in the right place. ECV stands for Electric Convenience Vehicle, the term Disney uses for mobility scooters available at their parks. Scootz provides ECV rentals throughout Orlando with free delivery to your hotel, vacation rental, or private residence. Whether you call it an ECV, mobility scooter, or electric scooter, it's the same thing: a battery-powered personal mobility device that lets you navigate theme parks, attractions, and your vacation comfortably. We deliver to all Disney World resorts, Universal Orlando hotels, and anywhere else in the Orlando area. With 631 five-star Google reviews, Scootz is the trusted choice for ECV rentals in Orlando. Call (407) 270-9900 or book online.

## Quick Facts About ECV Rentals from Scootz

**ECV = mobility scooter** (same device, different names). **Free delivery and pickup** anywhere in the Orlando area. **All-day battery life** for full theme park days. **Use everywhere** unlike park rentals that stay in one location. **No prescription needed** to rent an ECV. **Multi-day rentals available** with discounts for longer stays. **631 five-star reviews** from Orlando visitors. **Available 8 AM to 11 PM daily.**

## Common Questions About ECVs and ECV Rentals

**What is an ECV (Electric Convenience Vehicle)?**

ECV stands for Electric Convenience Vehicle. It's the term Disney uses for the mobility scooters available for rent at their parks. An ECV is a battery-powered personal mobility device with a seat, handlebars for steering, and controls for speed and direction. The rider operates it independently. ECVs are different from wheelchairs, which are typically pushed by a companion.

**Is an ECV the same as a mobility scooter?**

Yes. ECV, mobility scooter, electric scooter, and power scooter all refer to the same type of device. Disney calls them ECVs. Universal and other attractions call them mobility scooters. When you rent from Scootz, you're getting a mobility scooter that works everywhere.

**Do I need a prescription or doctor's note to rent an ECV?**

No. ECV rentals from Scootz do not require any documentation. If you have difficulty walking long distances for any reason, whether due to a disability, medical condition, temporary injury, or simply wanting to conserve energy, you're welcome to rent an ECV. No questions asked.

**Can I rent an ECV if I'm not disabled?**

Yes. Many people rent ECVs because they're recovering from surgery, dealing with a temporary injury, managing chronic pain, or simply want to save their energy for experiencing the parks rather than spending it on walking. You don't need a diagnosis to rent an ECV.

**What's the difference between an ECV and a wheelchair?**

ECVs are battery-powered and operated by the rider using handlebars and simple controls. The rider steers, accelerates, and brakes independently. Wheelchairs are typically manual devices pushed by a companion, though power wheelchairs also exist and are operated by the rider. ECVs are generally larger and faster than wheelchairs and require the rider to be able to safely operate the controls.

## Why Rent an ECV from Scootz Instead of at the Parks?

Theme parks like Disney World and Universal Orlando offer ECV rentals, but they come with limitations. Park ECVs must stay within that park. If you're visiting Magic Kingdom in the morning and EPCOT in the evening, you'll return one ECV and rent another, waiting in line twice. Park ECVs cannot leave the parks, so you can't use them at your resort, at Disney Springs, or at restaurants outside the parks. Park ECVs are rented daily, meaning you return it each night and rent again each morning.

When you rent an ECV from Scootz, we deliver it to your hotel before you even arrive at the parks. Your ECV stays with you for your entire rental period, whether that's one day or two weeks. Use it at all the Disney parks, Universal parks, Disney Springs, CityWalk, your resort, restaurants, and anywhere else you go. When your vacation ends, we pick it up from your hotel. No daily rental lines. No returning your ECV when you leave one park and renting another at the next.

## Our ECV Rental Options

Scootz offers several ECV models to match different needs and preferences. All our ECVs feature comfortable seating, intuitive controls, and all-day battery life designed for theme park use.

[PULL SCOOTER MODELS, SPECIFICATIONS, AND PRICING FROM /our-fleet.html AND INSERT HERE. FORMAT AS FOLLOWS:]

**[Model Name]**

[Description of the scooter, who it's best for]. Weight capacity: [X] lbs. Battery range: [X] miles, sufficient for all-day park use. [Any other key specs.]

Daily rental rate: $[XX]. Multi-day rates available.

[REPEAT FOR EACH SCOOTER MODEL]

Not sure which ECV is right for you? Call (407) 270-9900 and we'll help you choose based on your plans and preferences.

## Where to Use Your ECV in Orlando

Your Scootz ECV rental works everywhere in Orlando. Use it at Walt Disney World including Magic Kingdom, EPCOT, Hollywood Studios, Animal Kingdom, Disney Springs, and all Disney resort hotels. Use it at Universal Orlando including Universal Studios Florida, Islands of Adventure, Epic Universe, CityWalk, and all Universal resort hotels. Use it at SeaWorld Orlando, LEGOLAND Florida, and other Orlando attractions.

Beyond the parks, use your ECV at the Orlando Convention Center, Orlando Premium Outlets, International Drive attractions, restaurants, grocery stores, and anywhere else you need mobility assistance during your trip.

## Where We Deliver ECVs in Orlando

Scootz provides free ECV delivery throughout the Orlando area. We deliver to all Walt Disney World resort hotels including Deluxe, Moderate, and Value resorts, plus Disney Vacation Club properties and Good Neighbor hotels. We deliver to all Universal Orlando resort hotels including the new Epic Universe properties. We deliver to International Drive hotels, the Convention Center area, and SeaWorld area hotels.

We also deliver to vacation rentals, Airbnbs, and private homes throughout Orlando, Kissimmee, Lake Buena Vista, Celebration, and the greater Orlando area. We deliver to the Orlando International Airport area for guests beginning their trip directly from the airport.

## ECV Rentals for Conventions and Events

The Orlando Convention Center hosts major conventions and trade shows throughout the year. These events involve significant walking across massive exhibit halls, and an ECV can make the difference between a productive event and an exhausting one. Scootz delivers ECVs to Convention Center area hotels and to the Convention Center itself. If you're attending a convention in Orlando and need mobility assistance, an ECV rental is a practical solution.

## How to Rent an ECV from Scootz

Renting an ECV from Scootz takes just a few minutes. Book online or call (407) 270-9900 to reserve your ECV. Choose your model and rental dates, then provide your delivery location and preferred delivery time. We coordinate with you to deliver your ECV to your hotel or vacation rental. At the end of your rental, we pick it up from the same location.

For same-day rentals, call to check availability. We recommend booking in advance, especially during busy seasons, to guarantee your preferred ECV model.

## Book Your Orlando ECV Rental

Reserve your ECV now for your Orlando trip. Call (407) 270-9900 or [book online](/rentals.html). We deliver to your hotel before you need it and pick up when you're done. With 631 five-star reviews from Orlando visitors, Scootz is the trusted choice for ECV rentals in Orlando.

---

## Phase 3: Schema Implementation

### LocalBusiness Schema (Add to ALL Pages - New and Existing)

Add this schema to the `<head>` section or before `</body>` on every page of the site:

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "https://www.scootzrentals.com/#organization",
  "name": "Scootz Mobility Scooter Rentals",
  "description": "Mobility scooter and ECV rentals in Orlando with free delivery to Disney World, Universal Studios, Epic Universe, and all Orlando hotels and vacation rentals.",
  "url": "https://www.scootzrentals.com",
  "telephone": "(407) 270-9900",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "7922 Kingspointe Parkway STE 106",
    "addressLocality": "Orlando",
    "addressRegion": "FL",
    "postalCode": "32819",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "28.4815",
    "longitude": "-81.4706"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    "opens": "08:00",
    "closes": "23:00"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "631"
  },
  "areaServed": [
    {"@type": "City", "name": "Orlando"},
    {"@type": "City", "name": "Kissimmee"},
    {"@type": "City", "name": "Lake Buena Vista"},
    {"@type": "City", "name": "Celebration"}
  ],
  "priceRange": "$$"
}
</script>
```

### FAQPage Schema (Add to Each New Page)

Each new page has FAQ content. Add FAQPage schema with those questions and answers.

**For disney-world-scooter-rentals.html:**

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Can I use my rental scooter at all four Disney parks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Unlike Disney's in-park ECV rentals that must stay within one park, your Scootz scooter goes wherever you go. Ride it at Magic Kingdom in the morning, take the bus to EPCOT for dinner, and keep it at your resort overnight."
      }
    },
    {
      "@type": "Question",
      "name": "Can I take my scooter on Disney buses and the Monorail?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Disney transportation accommodates mobility scooters on buses, the Monorail, boats, and the Skyliner gondolas. During peak times, you may occasionally need to wait for the next vehicle with available wheelchair and scooter space."
      }
    },
    {
      "@type": "Question",
      "name": "How is Scootz different from renting at the parks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "When you rent from Disney, you get an ECV that stays within that park. You return it when you leave and rent again the next day. With Scootz, your scooter is delivered to your hotel before you even arrive at the parks. Keep it for your entire trip and use it everywhere."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a reservation, or can I get same-day delivery?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We recommend booking in advance, especially during busy seasons, to guarantee availability of your preferred scooter model. However, we do offer same-day delivery when scooters are available. Call (407) 270-9900 to check availability."
      }
    },
    {
      "@type": "Question",
      "name": "What if something goes wrong with my scooter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Call us immediately at (407) 270-9900. We're available 8 AM to 11 PM daily and will work quickly to resolve any issues."
      }
    }
  ]
}
</script>
```

**For universal-studios-scooter-rentals.html:**

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Can I use my scooter at both Universal parks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Your Scootz rental goes wherever you go. Use it at Universal Studios Florida, Islands of Adventure, CityWalk, your resort, and anywhere else during your trip."
      }
    },
    {
      "@type": "Question",
      "name": "Can I take my scooter on the Hogwarts Express?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The Hogwarts Express train between Universal Studios Florida and Islands of Adventure accommodates mobility scooters."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to International Drive hotels?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We deliver to all Universal resort hotels on property, all International Drive hotels, Convention Center area hotels, and vacation rentals throughout the area."
      }
    },
    {
      "@type": "Question",
      "name": "What about the new Epic Universe park?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide scooter rentals for Epic Universe. Epic Universe is located on a separate campus from the original Universal Orlando Resort, but we deliver throughout the Orlando area."
      }
    },
    {
      "@type": "Question",
      "name": "How is this different from renting at Universal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Universal's in-park scooter rentals stay within that park. With Scootz, we deliver to your hotel, you keep the scooter for your entire stay, and we pick it up when you're done. Use it at both parks, CityWalk, your hotel, and off-property."
      }
    }
  ]
}
</script>
```

**For epic-universe-scooter-rentals.html:**

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How big is Epic Universe compared to other Universal parks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Epic Universe is Universal Orlando's largest theme park. The size and number of themed worlds make it comparable in scale to a major Disney park. You should expect significant walking to experience all attractions."
      }
    },
    {
      "@type": "Question",
      "name": "Is Epic Universe connected to Universal Studios and Islands of Adventure?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Epic Universe is located on a separate campus from the original Universal Orlando Resort. The two locations are not within walking distance. Your Scootz scooter can be used at both locations."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to the new Epic Universe hotels?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We deliver to all Universal hotels including Universal Helios Grand Hotel, Universal Stella Nova Resort, and Universal Terra Luna Resort near Epic Universe."
      }
    },
    {
      "@type": "Question",
      "name": "Can I use my scooter at Epic Universe and Disney World on the same trip?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Your Scootz rental is yours for your entire rental period. Use it at Epic Universe, all Universal parks, all Disney parks, and anywhere else you visit."
      }
    },
    {
      "@type": "Question",
      "name": "Should I book my scooter early for Epic Universe?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Epic Universe is Universal's newest and most anticipated park. Demand for scooter rentals is high, especially during Epic Universe's first year. Book early to guarantee availability."
      }
    }
  ]
}
</script>
```

**For ecv-rentals-orlando.html:**

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is an ECV (Electric Convenience Vehicle)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ECV stands for Electric Convenience Vehicle. It's the term Disney uses for mobility scooters available for rent at their parks. An ECV is a battery-powered personal mobility device with a seat, handlebars for steering, and controls for speed and direction."
      }
    },
    {
      "@type": "Question",
      "name": "Is an ECV the same as a mobility scooter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. ECV, mobility scooter, electric scooter, and power scooter all refer to the same type of device. Disney calls them ECVs. Universal and other attractions call them mobility scooters."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a prescription or doctor's note to rent an ECV?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. ECV rentals from Scootz do not require any documentation. If you have difficulty walking long distances for any reason, you're welcome to rent an ECV."
      }
    },
    {
      "@type": "Question",
      "name": "Can I rent an ECV if I'm not disabled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Many people rent ECVs because they're recovering from surgery, dealing with a temporary injury, managing chronic pain, or simply want to save energy. No diagnosis required."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between an ECV and a wheelchair?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ECVs are battery-powered and operated by the rider using handlebars. Wheelchairs are typically manual devices pushed by a companion. ECVs allow for independent mobility."
      }
    }
  ]
}
</script>
```

### BreadcrumbList Schema (Add to Each New Page)

**disney-world-scooter-rentals.html:**
```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.scootzrentals.com"},
    {"@type": "ListItem", "position": 2, "name": "Disney World Scooter Rentals", "item": "https://www.scootzrentals.com/disney-world-scooter-rentals.html"}
  ]
}
</script>
```

**universal-studios-scooter-rentals.html:**
```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.scootzrentals.com"},
    {"@type": "ListItem", "position": 2, "name": "Universal Orlando Scooter Rentals", "item": "https://www.scootzrentals.com/universal-studios-scooter-rentals.html"}
  ]
}
</script>
```

**epic-universe-scooter-rentals.html:**
```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.scootzrentals.com"},
    {"@type": "ListItem", "position": 2, "name": "Epic Universe Scooter Rentals", "item": "https://www.scootzrentals.com/epic-universe-scooter-rentals.html"}
  ]
}
</script>
```

**ecv-rentals-orlando.html:**
```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.scootzrentals.com"},
    {"@type": "ListItem", "position": 2, "name": "ECV Rentals Orlando", "item": "https://www.scootzrentals.com/ecv-rentals-orlando.html"}
  ]
}
</script>
```

---

## Phase 4: Navigation Update

Add the new pages to the site navigation. Determine the existing nav pattern during discovery, then add these pages.

**Recommended navigation placement:**

If the site uses dropdown menus:
```
Theme Parks (dropdown)
├── Disney World Scooter Rentals
├── Universal Orlando Scooter Rentals
├── Epic Universe Scooter Rentals
└── ECV Rentals Orlando
```

If the site uses a flat navigation:
```
Home | Rentals | Our Fleet | Disney | Universal | Epic Universe | ECV Rentals | FAQs | Contact
```

**Update navigation on all pages** - both the new pages and all existing pages must have consistent navigation.

---

## Phase 5: Internal Linking

The page content above already includes internal links marked with markdown syntax. Convert these to proper HTML links matching the existing site's link styling.

**Additional internal links to add on existing pages:**

On **/rentals.html** (after adding the expanded content), add a section:

```html
<h2>Scooter Rentals by Destination</h2>
<p>Planning a visit to a specific Orlando destination? See our dedicated guides:</p>
<ul>
  <li><a href="/disney-world-scooter-rentals.html">Disney World Scooter Rentals</a></li>
  <li><a href="/universal-studios-scooter-rentals.html">Universal Orlando Scooter Rentals</a></li>
  <li><a href="/epic-universe-scooter-rentals.html">Epic Universe Scooter Rentals</a></li>
  <li><a href="/ecv-rentals-orlando.html">ECV Rentals Orlando</a></li>
</ul>
```

---

## Phase 6: Quality Assurance Checklist

After creating all pages, verify each item:

### HTML Standards
- [ ] Valid doctype and `<html lang="en">`
- [ ] Semantic elements used (`<header>`, `<main>`, `<section>`, `<footer>`)
- [ ] Only one H1 per page
- [ ] Heading hierarchy is logical (H1 → H2 → H3, no skipping)
- [ ] All images have descriptive alt text
- [ ] All internal links work

### SEO Requirements
- [ ] Each page has a unique title tag under 65 characters
- [ ] Each page has a unique meta description under 155 characters
- [ ] `<meta name="robots" content="index, follow">` present
- [ ] Canonical URL set correctly on each page
- [ ] Open Graph tags present (og:title, og:description, og:url, og:type)

### Schema Validation
- [ ] LocalBusiness schema validates at validator.schema.org
- [ ] FAQPage schema validates
- [ ] BreadcrumbList schema validates
- [ ] Test all new pages with Google Rich Results Test

### Content Quality
- [ ] No placeholder text remaining (all [BRACKETS] filled in)
- [ ] Phone number consistent: (407) 270-9900
- [ ] Address consistent: 7922 Kingspointe Parkway STE 106, Orlando, FL 32819
- [ ] Links to /rentals.html, /our-fleet.html, /faqs.html all work

### Design Consistency
- [ ] Header matches existing pages exactly
- [ ] Footer matches existing pages exactly
- [ ] All CSS classes match existing site patterns
- [ ] No new CSS created
- [ ] Mobile responsive

---

## Deliverables

When complete, provide:

1. **All new HTML files (4)** ready to upload
2. **All modified existing files** (index.html, sales.html, rentals.html, plus any files with nav updates)
3. **List of all files modified**
4. **Summary of changes made**
5. **Items requiring client confirmation** (any pricing or specs not found on site)
6. **Validation results** - confirm all schema passes

---

## Important Reminders

- **Use the content exactly as provided** - do not summarize or rewrite
- **Pull pricing and specs from /our-fleet.html** and insert where indicated
- **Match existing CSS patterns** - do not create new styles
- **Validate all schema** before finalizing
- **Test all internal links**
- **Flag anything you're unsure about** rather than guessing
