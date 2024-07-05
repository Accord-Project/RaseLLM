<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-yaml.min.js"></script>

<pre><code class="language-yaml">
- identifier: "1"
  $type: DocumentSubdivision
  title: Horizontal escape route design
  hasPart:
    - identifier: 1.tb1
      $type: Statement
      asText:
        Means of escape should be provided from any point on a floor to an exit
        from the floor. The general principle is that any person confronted by a fire
        within a building can turn away from it and escape safely.
    - identifier: 1.tb2
      $type:
        - Statement
        - CheckStatement
        - RequirementSection
      asText:
        In certain conditions , typically classrooms, a single direction of escape
        (a dead end condition) can be accepted as providing reasonable safety providing
        that the recommendations of Table 1 on travel distances in a single direction
        is met and the occupancy of the space is limited to 60 .
      hasInlinePart:
        - identifier: 1.tb2.ts1
          $type: Statement
          asText: In certain
        - identifier: 1.tb2.ts2
          $type:
            - CheckStatement
            - Application
          asText: conditions
          isOperationalizedBy:
            hasTarget: building area
            hasComparator: "="
            hasValue: "true"
        - identifier: 1.tb2.ts3
          $type: Statement
          asText:
            ", typically classrooms, a single direction of escape (a dead end condition)
            can be accepted as providing reasonable safety providing that the recommendations
            of"
        - identifier: 1.tb2.ts4
          $type:
            - CheckStatement
            - Requirement
          asText: Table 1 on travel distances
          isOperationalizedBy:
            hasTarget: travel distance complies with Table 1
            hasComparator: "="
            hasValue: "true"
        - identifier: 1.tb2.ts5
          $type: Statement
          asText: in a single direction is met and the
        - identifier: 1.tb2.ts6
          $type:
            - CheckStatement
            - Requirement
          asText: occupancy of the space is limited to 60
          isOperationalizedBy:
            hasTarget: Number Of Occupants
            hasComparator: +amp;lt;=
            hasValue: "60"
    - identifier: "1.1"
      $type: DocumentSubdivision
      title: Number of escape routes and exits, and limits on travel distance
      hasPart:
        - identifier: 1.1.tb1
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            The number of escape routes and exits to be provided depends on the
            number of occupants in the room, tier or storey in question and the limits
            on travel distance to the nearest exit given in Table 1 .
          hasInlinePart:
            - identifier: 1.1.tb1.ts1
              $type: Statement
              asText: The number of
            - identifier: 1.1.tb1.ts2
              $type:
                - CheckStatement
                - Application
              asText: escape routes
              isOperationalizedBy:
                hasTarget: escape route
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.1.tb1.ts3
              $type: Statement
              asText:
                and exits to be provided depends on the number of occupants in the
                room, tier or storey in question and the
            - identifier: 1.1.tb1.ts4
              $type:
                - CheckStatement
                - Requirement
              asText: limits on travel distance to the nearest exit given in Table 1
              isOperationalizedBy:
                hasTarget: travel distance to the nearest exit complies with table 1
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.1.tb1.ts5
              $type: Statement
              asText: .
        - identifier: 1.1.tb2
          $type: Statement
          asText:
            It is only the distance to the nearest exit that needs to meet the recommendations.
            The other exits may be further away and in multi-storey buildings, more than
            one stair will be needed for escape.
        - identifier: 1.1.tb3
          $type: Statement
          asText:
            In many cases, there will not be an alternative at the beginning of
            the route. For example, there may be only one exit from a room to a corridor,
            from which point escape is possible in two directions. A single route is acceptable
            for parts of a floor from which a storey exit or escape in two directions
            can be reached within the travel distance limit for travel in one direction
            set in Table 1. Figure 1 shows an example of a dead-end condition in an open
            plan layout.
        - identifier: 1.1.tb4
          $type: Statement
          asText:
            Very young children (nursery, reception and infant class) will move
            more slowly than older children or adults and require constant supervision
            and direction during egress. Having direct access to an external place of
            safety from their classrooms is an advantage.
    - identifier: "1.2"
      $type: DocumentSubdivision
      title: Number of occupants and exits
      hasPart:
        - identifier: 1.2.tb1
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            The value used for the number of occupants will normally be that specified
            as the basis for the design. When the number of occupants likely to use a
            room , tier or storey is not known, the capacity should be calculated according
            to the appropriate floor space factors (see Table 2 ).
          hasInlinePart:
            - identifier: 1.2.tb1.ts1
              $type: Statement
              asText:
                The value used for the number of occupants will normally be that specified
                as the basis for the design.
            - identifier: 1.2.tb1.ts2
              $type:
                - CheckStatement
                - ApplicationSection
              asText:
                When the number of occupants likely to use a room , tier or storey
                is not known,
              hasInlinePart:
                - identifier: 1.2.tb1.ts2.ts1
                  $type: Statement
                  asText: When the
                - identifier: 1.2.tb1.ts2.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: number of occupants
                  isOperationalizedBy:
                    hasTarget: number of occupants is known
                    hasComparator: "="
                    hasValue: "false"
                - identifier: 1.2.tb1.ts2.ts3
                  $type: Statement
                  asText: likely to use
                - identifier: 1.2.tb1.ts2.ts4
                  $type:
                    - CheckStatement
                    - Application
                  asText: a
                  isOperationalizedBy:
                    hasTarget: building area
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.2.tb1.ts2.ts5
                  $type:
                    - CheckStatement
                    - Selection
                  asText: room
                  isOperationalizedBy:
                    hasTarget: is a room
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.2.tb1.ts2.ts6
                  $type: Statement
                  asText: ","
                - identifier: 1.2.tb1.ts2.ts7
                  $type:
                    - CheckStatement
                    - Selection
                  asText: tier
                  isOperationalizedBy:
                    hasTarget: is a tier
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.2.tb1.ts2.ts8
                  $type: Statement
                  asText: or
                - identifier: 1.2.tb1.ts2.ts9
                  $type:
                    - CheckStatement
                    - Selection
                  asText: storey
                  isOperationalizedBy:
                    hasTarget: is a storey
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.2.tb1.ts2.ts10
                  $type: Statement
                  asText: is not known,
            - identifier: 1.2.tb1.ts3
              $type:
                - CheckStatement
                - RequirementSection
              asText:
                the capacity should be calculated according to the appropriate floor
                space factors (see Table 2 ).
              hasInlinePart:
                - identifier: 1.2.tb1.ts3.ts1
                  $type: Statement
                  asText:
                    the capacity should be calculated according to the appropriate floor
                    space factors (see
                - identifier: 1.2.tb1.ts3.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: Table 2
                  isOperationalizedBy:
                    hasTarget: capacity is based on table 2
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.2.tb1.ts3.ts3
                  $type: Statement
                  asText: ).
        - identifier: 1.2.tb2
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            Table 3 gives the minimum number of escape routes and exits from a room
            or storey according to the number of occupants. The number of exits may have
            to be increased to comply with the limits on travel distances given in Table
            1.
          hasInlinePart:
            - identifier: 1.2.tb2.ts1
              $type:
                - CheckStatement
                - Requirement
              asText: Table 3
              isOperationalizedBy:
                hasTarget: Number Of Escape Routes Or Exits Complies With Table 3
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.2.tb2.ts2
              $type: Statement
              asText: gives the minimum number of escape routes and exits
            - identifier: 1.2.tb2.ts3
              $type:
                - CheckStatement
                - Selection
              asText: from a room
              isOperationalizedBy:
                hasTarget: is a room
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.2.tb2.ts4
              $type:
                - CheckStatement
                - Application
              asText: or
              isOperationalizedBy:
                hasTarget: building area
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.2.tb2.ts5
              $type:
                - CheckStatement
                - Selection
              asText: storey
              isOperationalizedBy:
                hasTarget: is a storey
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.2.tb2.ts6
              $type: Statement
              asText: according
            - identifier: 1.2.tb2.ts7
              $type:
                - CheckStatement
                - Selection
              asText: to
              isOperationalizedBy:
                hasTarget: is a tier
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.2.tb2.ts8
              $type: Statement
              asText:
                the number of occupants. The number of exits may have to be increased
                to comply with the limits on travel distances given in Table 1.
    - identifier: "1.3"
      $type: DocumentSubdivision
      title: Alternative escape routes
      hasPart:
        - identifier: 1.3.tb1
          $type:
            - Statement
            - ChecklistStatement
            - RequirementSection
          asText:
            "A choice of escape routes is of little value if two or more are likely
            to be disabled simultaneously. Alternative escape routes should therefore
            satisfy the following criteria:"
          hasInlinePart:
            - identifier: 1.3.tb1.ts1
              $type: Statement
              asText:
                A choice of escape routes is of little value if two or more are likely
                to be disabled simultaneously.
            - identifier: 1.3.tb1.ts2
              $type:
                - CheckStatement
                - Application
              asText: Alternative escape routes
              isOperationalizedBy:
                hasTarget: Is Alternative Escape Route
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.3.tb1.ts3
              $type: Statement
              asText: "should therefore satisfy the following criteria:"
          hasPart:
            - identifier: 1.3.tb1.tb1
              $type:
                - Statement
                - CheckStatement
                - ExceptionSection
              asText: they are in directions 45o or more apart (see Figure 1); or
              hasInlinePart:
                - identifier: 1.3.tb1.tb1.ts1
                  $type: Statement
                  asText: they are in
                - identifier: 1.3.tb1.tb1.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: directions 45o or more apart
                  isOperationalizedBy:
                    hasTarget:
                      is in a direction 45 degrees or more apart from the escape
                      route
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.3.tb1.tb1.ts3
                  $type: Statement
                  asText: (see Figure 1); or
            - identifier: 1.3.tb1.tb2
              $type:
                - Statement
                - CheckStatement
                - ExceptionSection
              asText:
                they are in directions less than 45o apart , but are separated from
                each other by fire-resisting construction
              hasInlinePart:
                - identifier: 1.3.tb1.tb2.ts1
                  $type: Statement
                  asText: they are in
                - identifier: 1.3.tb1.tb2.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: directions less than 45o apart
                  isOperationalizedBy:
                    hasTarget:
                      is in a direction 45 degrees or more apart from the escape
                      route
                    hasComparator: "="
                    hasValue: "false"
                - identifier: 1.3.tb1.tb2.ts3
                  $type: Statement
                  asText: ", but are"
                - identifier: 1.3.tb1.tb2.ts4
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: separated from each other by fire-resisting construction
                  isOperationalizedBy:
                    hasTarget:
                      Is Separated From The Primary Escape Route By Fire-Resisting
                      Construction
                    hasComparator: "="
                    hasValue: "true"
    - identifier: "1.4"
      $type: DocumentSubdivision
      title: Inner rooms
      hasPart:
        - identifier: 1.4.tb1
          $type:
            - Statement
            - ChecklistStatement
            - RequirementSection
          asText:
            "A room from which the only escape route is through another room is
            called an inner room . Classrooms can be inner rooms when the corridor that
            they escape into is used as a teaching space or for other purposes, rather
            than just for circulation. The risk is that if a fire starts in the access
            room it could prejudice escape from the inner room. Such an arrangement is
            acceptable providing that the following conditions are satisfied:"
          hasInlinePart:
            - identifier: 1.4.tb1.ts1
              $type: Statement
              asText:
                A room from which the only escape route is through another room is
                called an
            - identifier: 1.4.tb1.ts2
              $type:
                - CheckStatement
                - Application
              asText: inner room
              isOperationalizedBy:
                hasTarget: is inner room
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.4.tb1.ts3
              $type: Statement
              asText:
                ". Classrooms can be inner rooms when the corridor that they escape
                into is used as a teaching space or for other purposes, rather than just
                for circulation. The risk is that if a fire starts in the access room it
                could prejudice escape from the inner room. Such an arrangement is acceptable
                providing that the following conditions are satisfied:"
          hasPart:
            - identifier: 1.4.tb1.tb1
              $type:
                - Statement
                - CheckStatement
                - RequirementSection
              asText:
                the occupant capacity of the inner room does not exceed 60 and the
                access room is not a place of special fire hazard
              hasInlinePart:
                - identifier: 1.4.tb1.tb1.ts1
                  $type: Statement
                  asText: the
                - identifier: 1.4.tb1.tb1.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: occupant capacity of the inner room does not exceed 60
                  isOperationalizedBy:
                    hasTarget: occupant capacity
                    hasComparator: +amp;lt;=
                    hasValue: "60"
                    hasUnit: persons
                - identifier: 1.4.tb1.tb1.ts3
                  $type: Statement
                  asText: and the
                - identifier: 1.4.tb1.tb1.ts4
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: access room is not a place of special fire hazard
                  isOperationalizedBy:
                    hasTarget: access room is a place of special fire hazard
                    hasComparator: "="
                    hasValue: "false"
            - identifier: 1.4.tb1.tb2
              $type:
                - Statement
                - CheckStatement
                - RequirementSection
              asText:
                the escape route from the inner room does not pass through more than
                one access room
              hasInlinePart:
                - identifier: 1.4.tb1.tb2.ts1
                  $type: Statement
                  asText: the
                - identifier: 1.4.tb1.tb2.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText:
                    escape route from the inner room does not pass through more than
                    one access room
                  isOperationalizedBy:
                    hasTarget:
                      escape route from the inner room does not pass through more
                      than one access room
                    hasComparator: "="
                    hasValue: "true"
            - identifier: 1.4.tb1.tb3
              $type: Statement
              asText:
                the travel distance from any point in the inner room to the exit(s)
                from the access room does not exceed the appropriate limit given in Table
                1
            - identifier: 1.4.tb1.tb4
              $type:
                - Statement
                - ChecklistStatement
                - RequirementSection
              asText: "one of the following arrangements is made:"
              hasPart:
                - identifier: 1.4.tb1.tb4.tb1
                  $type:
                    - Statement
                    - CheckStatement
                    - ExceptionSection
                  asText:
                    the enclosures (walls or partitions) of the inner room are stopped
                    at least 500mm below the ceiling ; or
                  hasInlinePart:
                    - identifier: 1.4.tb1.tb4.tb1.ts1
                      $type: Statement
                      asText: the
                    - identifier: 1.4.tb1.tb4.tb1.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText:
                        enclosures (walls or partitions) of the inner room are stopped
                        at least 500mm below the ceiling
                      isOperationalizedBy:
                        hasTarget: enclosure is stopped at a distance below the ceiling
                        hasComparator: +amp;gt;=
                        hasValue: "500"
                        hasUnit: mm
                    - identifier: 1.4.tb1.tb4.tb1.ts3
                      $type: Statement
                      asText: ; or
                - identifier: 1.4.tb1.tb4.tb2
                  $type:
                    - Statement
                    - CheckStatement
                    - ExceptionSection
                  asText:
                    a suitably sited vision panel not less than 0.1m2 is located in
                    the door or walls of the inner room , to enable occupants of the inner
                    room to see if a fire has started in the outer room; or
                  hasInlinePart:
                    - identifier: 1.4.tb1.tb4.tb2.ts1
                      $type: Statement
                      asText: a suitably sited
                    - identifier: 1.4.tb1.tb4.tb2.ts2
                      $type:
                        - CheckStatement
                        - RequirementSection
                        - Requirement
                      asText: vision panel
                      isOperationalizedBy:
                        hasTarget: vision panel is provided
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.4.tb1.tb4.tb2.ts3
                      $type:
                        - CheckStatement
                        - RequirementSection
                      asText: not less than 0.1m2
                      hasInlinePart:
                        - identifier: 1.4.tb1.tb4.tb2.ts3.ts1
                          $type: Statement
                          asText: not less than
                        - identifier: 1.4.tb1.tb4.tb2.ts3.ts2
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: 0.1m2
                          isOperationalizedBy:
                            hasTarget: vision panel has an area
                            hasComparator: +amp;gt;=
                            hasValue: "0.1"
                            hasUnit: m2
                    - identifier: 1.4.tb1.tb4.tb2.ts4
                      $type:
                        - CheckStatement
                        - RequirementSection
                      asText: is located in the door or walls of the inner room ,
                      hasInlinePart:
                        - identifier: 1.4.tb1.tb4.tb2.ts4.ts1
                          $type:
                            - CheckStatement
                            - Selection
                          asText: is located in the door
                          isOperationalizedBy:
                            hasTarget: vision panel is located in the door
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.4.tb1.tb4.tb2.ts4.ts2
                          $type: Statement
                          asText: or
                        - identifier: 1.4.tb1.tb4.tb2.ts4.ts3
                          $type:
                            - CheckStatement
                            - Selection
                          asText: walls of the inner room
                          isOperationalizedBy:
                            hasTarget:
                              vision panel is located in the wall of the inner room adjoining
                              the access room
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.4.tb1.tb4.tb2.ts4.ts4
                          $type: Statement
                          asText: ","
                    - identifier: 1.4.tb1.tb4.tb2.ts5
                      $type: Statement
                      asText:
                        to enable occupants of the inner room to see if a fire has started
                        in the outer room; or
                - identifier: 1.4.tb1.tb4.tb3
                  $type:
                    - Statement
                    - CheckStatement
                    - ExceptionSection
                  asText:
                    the access room is fitted with a suitable automatic fire detection
                    and alarm system to warn the occupants of the inner room of the outbreak
                    of a fire in the access room
                  hasInlinePart:
                    - identifier: 1.4.tb1.tb4.tb3.ts1
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: the access room is fitted with a suitable automatic fire detection
                      isOperationalizedBy:
                        hasTarget:
                          access room is fitted with a suitable automatic fire detection
                          system
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.4.tb1.tb4.tb3.ts2
                      $type: Statement
                      asText: and
                    - identifier: 1.4.tb1.tb4.tb3.ts3
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: alarm system
                      isOperationalizedBy:
                        hasTarget: access room is fitted with a suitable fire alarm system
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.4.tb1.tb4.tb3.ts4
                      $type: Statement
                      asText:
                        to warn the occupants of the inner room of the outbreak of a fire
                        in the access room
    - identifier: "1.5"
      $type: DocumentSubdivision
      title: Open Plan
      hasPart:
        - identifier: 1.5.rs1
          $type: RequirementSection
          hasPart:
            - identifier: 1.5.rs1.tb1
              $type: Statement
              asText:
                "Escape routes should not be within 4.5m of open connections between
                floors . Where an open-plan space connects more than one storey , rooms
                accessed from the space should be treated as inner rooms with the space
                /balcony regarded as the access room. Any escape routes should not be compromised
                by openings in floors and this will be achieved by ensuring that:"
              hasInlinePart:
                - identifier: 1.5.rs1.tb1.ts1
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    Escape routes should not be within 4.5m of open connections between
                    floors .
                  hasInlinePart:
                    - identifier: 1.5.rs1.tb1.ts1.ts1
                      $type:
                        - CheckStatement
                        - Application
                      asText: Escape routes
                      isOperationalizedBy:
                        hasTarget: escape route
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb1.ts1.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: should not be within 4.5m of open connections between floors
                      isOperationalizedBy:
                        hasTarget: is a distance from open connections between floors
                        hasComparator: +amp;gt;
                        hasValue: "4.5"
                        hasUnit: m
                    - identifier: 1.5.rs1.tb1.ts1.ts3
                      $type: Statement
                      asText: .
                - identifier: 1.5.rs1.tb1.ts2
                  $type:
                    - CheckStatement
                    - ApplicationSection
                  asText: Where an open-plan space connects more than one storey ,
                  hasInlinePart:
                    - identifier: 1.5.rs1.tb1.ts2.ts1
                      $type: Statement
                      asText: Where an
                    - identifier: 1.5.rs1.tb1.ts2.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: open-plan
                      isOperationalizedBy:
                        hasTarget: is open-plan
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb1.ts2.ts3
                      $type:
                        - CheckStatement
                        - Application
                      asText: space
                      isOperationalizedBy:
                        hasTarget: space
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb1.ts2.ts4
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: connects more than one storey
                      isOperationalizedBy:
                        hasTarget: connects more than one storey
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb1.ts2.ts5
                      $type: Statement
                      asText: ","
                - identifier: 1.5.rs1.tb1.ts3
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    rooms accessed from the space should be treated as inner rooms with
                    the space /balcony regarded as the access room.
                  hasInlinePart:
                    - identifier: 1.5.rs1.tb1.ts3.ts1
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: rooms accessed from the space should be treated as inner rooms
                      isOperationalizedBy:
                        hasTarget:
                          room accessed from the space comply with inner room requirements
                          in building bulletin 100 May 2021 clause 4.9
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb1.ts3.ts2
                      $type: Statement
                      asText: with the
                    - identifier: 1.5.rs1.tb1.ts3.ts3
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: space
                      isOperationalizedBy:
                        hasTarget:
                          space complies with access room requirements in building
                          bulletin 100 May 2021 clause 4.9
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb1.ts3.ts4
                      $type: Statement
                      asText: /balcony regarded as the access room.
                - identifier: 1.5.rs1.tb1.ts4
                  $type: Statement
                  asText:
                    "Any escape routes should not be compromised by openings in floors
                    and this will be achieved by ensuring that:"
              hasPart:
                identifier: 1.5.rs1.rs1
                $type: RequirementSection
                hasPart:
                  - identifier: 1.5.rs1.rs1.tb1
                    $type:
                      - Statement
                      - CheckStatement
                      - ExceptionSection
                    asText:
                      the direction of travel is away from the opening (e.g. A-B in
                      Figure 2a); or
                    hasInlinePart:
                      - identifier: 1.5.rs1.rs1.tb1.ts1
                        $type: Statement
                        asText: the
                      - identifier: 1.5.rs1.rs1.tb1.ts2
                        $type:
                          - CheckStatement
                          - Requirement
                        asText: direction of travel is away from the opening
                        isOperationalizedBy:
                          hasTarget: direction of travel is away from the opening
                          hasComparator: "="
                          hasValue: "true"
                      - identifier: 1.5.rs1.rs1.tb1.ts3
                        $type: Statement
                        asText: (e.g. A-B in Figure 2a); or
                  - identifier: 1.5.rs1.rs1.tb2
                    $type:
                      - Statement
                      - CheckStatement
                      - ExceptionSection
                    asText:
                      there is an alternative escape route does not pass within 4.5m
                      of the opening (e.g. the rooms with alternative exits in Figure 2b)
                    hasInlinePart:
                      - identifier: 1.5.rs1.rs1.tb2.ts1
                        $type: Statement
                        asText: there is an alternative
                      - identifier: 1.5.rs1.rs1.tb2.ts2
                        $type:
                          - CheckStatement
                          - Application
                        asText: escape route
                        isOperationalizedBy:
                          hasTarget: alternative escape route
                          hasComparator: "="
                          hasValue: "true"
                      - identifier: 1.5.rs1.rs1.tb2.ts3
                        $type:
                          - CheckStatement
                          - Requirement
                        asText: does not pass within 4.5m of the opening
                        isOperationalizedBy:
                          hasTarget: alternative escape route passes within 4.5m of the opening
                          hasComparator: "="
                          hasValue: "false"
                      - identifier: 1.5.rs1.rs1.tb2.ts4
                        $type: Statement
                        asText: (e.g. the rooms with
                      - identifier: 1.5.rs1.rs1.tb2.ts5
                        $type:
                          - CheckStatement
                          - Requirement
                        asText: alternative
                        isOperationalizedBy:
                          hasTarget: an alternative escape route is provided
                          hasComparator: "="
                          hasValue: "true"
                      - identifier: 1.5.rs1.rs1.tb2.ts6
                        $type: Statement
                        asText: exits in Figure 2b)
            - identifier: 1.5.rs1.tb2
              $type:
                - Statement
                - CheckStatement
                - RequirementSection
              asText:
                If the opening passes through a compartment floor (see Section 13),
                the guidance given in Annex B of BS 9999 , "Recommendations for atria",
                should be followed for fire precautions in atria.
              hasInlinePart:
                - identifier: 1.5.rs1.tb2.ts1
                  $type: Statement
                  asText: If the
                - identifier: 1.5.rs1.tb2.ts2
                  $type:
                    - CheckStatement
                    - ApplicationSection
                  asText: opening passes through a compartment floor
                  hasInlinePart:
                    - identifier: 1.5.rs1.tb2.ts2.ts1
                      $type:
                        - CheckStatement
                        - Application
                      asText: opening
                      isOperationalizedBy:
                        hasTarget: opening
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb2.ts2.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: passes through a compartment floor
                      isOperationalizedBy:
                        hasTarget: passes through a compartment floor
                        hasComparator: "="
                        hasValue: "true"
                - identifier: 1.5.rs1.tb2.ts3
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    (see Section 13), the guidance given in Annex B of BS 9999 , "Recommendations
                    for atria", should be followed for fire precautions in atria.
                  hasInlinePart:
                    - identifier: 1.5.rs1.tb2.ts3.ts1
                      $type: Statement
                      asText: (see Section 13), the guidance given in
                    - identifier: 1.5.rs1.tb2.ts3.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: Annex B of BS 9999
                      isOperationalizedBy:
                        hasTarget: complies with Annex B of BS 9999
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.5.rs1.tb2.ts3.ts3
                      $type: Statement
                      asText:
                        ', "Recommendations for atria", should be followed for fire precautions
                        in atria.'
            - identifier: 1.5.rs1.rs2
              $type: RequirementSection
              hasPart:
                - identifier: 1.5.rs1.rs2.tb3
                  $type: Statement
                  asText:
                    "In schools fitted with sprinklers , rooms which are accessed by
                    an open balcony less than 4.5m wide , and which do not have an alternative
                    escape route away from the balcony , should satisfy the following conditions
                    (see Figure 2b):"
                  hasInlinePart:
                    - identifier: 1.5.rs1.rs2.tb3.ts1
                      $type:
                        - CheckStatement
                        - ApplicationSection
                      asText: In schools fitted with sprinklers ,
                      hasInlinePart:
                        - identifier: 1.5.rs1.rs2.tb3.ts1.ts1
                          $type: Statement
                          asText: In
                        - identifier: 1.5.rs1.rs2.tb3.ts1.ts2
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: schools
                          isOperationalizedBy:
                            hasTarget: is a school
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.5.rs1.rs2.tb3.ts1.ts3
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: fitted with sprinklers
                          isOperationalizedBy:
                            hasTarget: is fitted with sprinklers
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.5.rs1.rs2.tb3.ts1.ts4
                          $type: Statement
                          asText: ","
                    - identifier: 1.5.rs1.rs2.tb3.ts2
                      $type:
                        - CheckStatement
                        - ApplicationSection
                      asText:
                        "rooms which are accessed by an open balcony less than 4.5m wide
                        , and which do not have an alternative escape route away from the balcony
                        , should satisfy the following conditions (see Figure 2b):"
                      hasInlinePart:
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts1
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: rooms which are accessed
                          isOperationalizedBy:
                            hasTarget: provides access to a room
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts2
                          $type: Statement
                          asText: by an
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts3
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: open
                          isOperationalizedBy:
                            hasTarget: is open
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts4
                          $type:
                            - CheckStatement
                            - Application
                          asText: balcony
                          isOperationalizedBy:
                            hasTarget: balcony
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts5
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: less than 4.5m wide
                          isOperationalizedBy:
                            hasTarget: width
                            hasComparator: +amp;lt;
                            hasValue: "4.5"
                            hasUnit: m
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts6
                          $type: Statement
                          asText: ", and which"
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts7
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: do not have an alternative escape route away from the balcony
                          isOperationalizedBy:
                            hasTarget: has an an alternative escape route away from the balcony
                            hasComparator: "="
                            hasValue: "false"
                        - identifier: 1.5.rs1.rs2.tb3.ts2.ts8
                          $type: Statement
                          asText: ", should satisfy the following conditions (see Figure 2b):"
                  hasPart:
                    identifier: 1.5.rs1.rs2.rs1
                    $type: RequirementSection
                    hasPart:
                      - identifier: 1.5.rs1.rs2.rs1.tb1
                        $type: Statement
                        asText:
                          escape from any point on the balcony should be available in
                          at least two directions
                        hasInlinePart:
                          - identifier: 1.5.rs1.rs2.rs1.tb1.ts1
                            $type: Statement
                            asText: escape from any point on the
                          - identifier: 1.5.rs1.rs2.rs1.tb1.ts2
                            $type:
                              - CheckStatement
                              - Application
                            asText: balcony
                            isOperationalizedBy:
                              hasTarget: balcony
                              hasComparator: "="
                              hasValue: "true"
                          - identifier: 1.5.rs1.rs2.rs1.tb1.ts3
                            $type: Statement
                            asText: should be
                          - identifier: 1.5.rs1.rs2.rs1.tb1.ts4
                            $type:
                              - CheckStatement
                              - Requirement
                            asText: available in at least two directions
                            isOperationalizedBy:
                              hasTarget:
                                escape from any point on the balcony is available in
                                at least two directions
                              hasComparator: "="
                              hasValue: "true"
                      - identifier: 1.5.rs1.rs2.rs1.tb2
                        $type:
                          - Statement
                          - CheckStatement
                          - Requirement
                        asText: the travel distance along the balcony should not exceed 18m
                        isOperationalizedBy:
                          hasTarget: the travel distance along the balcony
                          hasComparator: +amp;lt;=
                          hasValue: "18"
                          hasUnit: m
    - identifier: "1.6"
      $type: DocumentSubdivision
      title: Access to stairways
      hasPart:
        - identifier: 1.6.tb1
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            Unless the doors to a protected stairway and any associated exit passageway
            are fitted with an automatic release mechanism , the stairway and any associated
            exit passageway should not form part of the primary circulation route between
            different parts of the building at the same level . This is because the self-closing
            fire doors are more likely to be rendered ineffective because of their constant
            use by, for example, being wedged open or having their closers removed.
          hasInlinePart:
            - identifier: 1.6.tb1.ts1
              $type: Statement
              asText: Unless the
            - identifier: 1.6.tb1.ts2
              $type:
                - CheckStatement
                - Application
              asText: doors
              isOperationalizedBy:
                hasTarget: door
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.6.tb1.ts3
              $type: Statement
              asText: to a
            - identifier: 1.6.tb1.ts4
              $type:
                - CheckStatement
                - Selection
              asText: protected stairway
              isOperationalizedBy:
                hasTarget: to a protected stairway
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.6.tb1.ts5
              $type: Statement
              asText: and any
            - identifier: 1.6.tb1.ts6
              $type:
                - CheckStatement
                - Selection
              asText: associated exit passageway
              isOperationalizedBy:
                hasTarget: to a exit passageway associated with a protected stairway
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.6.tb1.ts7
              $type:
                - CheckStatement
                - Exception
              asText: are fitted with an automatic release mechanism
              isOperationalizedBy:
                hasTarget: is fitted with an automatic release mechanism
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.6.tb1.ts8
              $type: Statement
              asText: ", the stairway and any associated exit passageway"
            - identifier: 1.6.tb1.ts9
              $type:
                - CheckStatement
                - Requirement
              asText:
                should not form part of the primary circulation route between different
                parts of the building at the same level
              isOperationalizedBy:
                hasTarget:
                  protected staurway and associated exit passageway forms part
                  of the primary circulation route between different parts of the building
                  at the same level
                hasComparator: "="
                hasValue: "false"
            - identifier: 1.6.tb1.ts10
              $type: Statement
              asText:
                . This is because the self-closing fire doors are more likely to be
                rendered ineffective because of their constant use by, for example, being
                wedged open or having their closers removed.
    - identifier: "1.7"
      $type: DocumentSubdivision
      title: Escape routes and exits
      hasPart:
        - identifier: 1.7.rs1
          $type: RequirementSection
          hasPart:
            - identifier: 1.7.rs1.tb1
              $type: Statement
              asText:
                The minimum clear headroom height in escape routes should not be less
                than 2m , except in doorways .
              hasInlinePart:
                - identifier: 1.7.rs1.tb1.ts1
                  $type: Statement
                  asText: The minimum clear headroom height in
                - identifier: 1.7.rs1.tb1.ts2
                  $type:
                    - CheckStatement
                    - Application
                  asText: escape routes
                  isOperationalizedBy:
                    hasTarget: escape route
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.7.rs1.tb1.ts3
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: should not be less than 2m
                  isOperationalizedBy:
                    hasTarget: clear headroom height except in a doorway
                    hasComparator: +amp;gt;=
                    hasValue: "2"
                    hasUnit: m
                - identifier: 1.7.rs1.tb1.ts4
                  $type: Statement
                  asText: ", except in doorways ."
            - identifier: 1.7.rs1.tb2
              $type: Statement
              asText:
                For escape purposes, the minimum corridor width of 1200mm recommended
                by AD M is sufficient if the corridor is not expected to serve as means
                of escape for more than 250 people . If the number of people is greater
                than this , the minimum width should be increased by an additional 50mm
                for each additional 10 persons (or part of 10). However, larger corridor
                widths will generally be needed in schools to cope with class changeovers
                and inclusion of lockers.
            - identifier: 1.7.rs1.tb3
              $type: Statement
              asText:
                The aggregate width of all the escape routes should be not less than
                that required to accommodate the maximum numbers of people likely to use
                them. Where the maximum number of people likely to use the escape route
                and exit is not known, the appropriate capacity should be based on the occupant
                capacity (see Table 2).
    - identifier: "1.8"
      $type: DocumentSubdivision
      title: Discounting exits
      hasPart:
        - identifier: 1.8.rs1
          $type: RequirementSection
          hasPart:
            - identifier: 1.8.rs1.tb1
              $type:
                - Statement
                - CheckStatement
                - RequirementSection
              asText:
                Where a storey or room has more than one exit , it must be assumed
                that a fire might prevent the occupants from using one of them. Therefore,
                when deciding on the total width of exits needed the largest exit should
                be discounted . Table 4 gives the required exit width against a maximum
                number of persons. It should be noted that the required storey exit width
                can affect the required stair width because stairs need to be at least as
                wide as any storey exit leading onto them . Table 5, provides the minimum
                clear width of doors, recommended in AD M.
              hasInlinePart:
                - identifier: 1.8.rs1.tb1.ts1
                  $type:
                    - CheckStatement
                    - ApplicationSection
                  asText: Where a storey or room has more than one exit ,
                  hasInlinePart:
                    - identifier: 1.8.rs1.tb1.ts1.ts1
                      $type:
                        - CheckStatement
                        - Application
                      asText: Where
                      isOperationalizedBy:
                        hasTarget: building area
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.8.rs1.tb1.ts1.ts2
                      $type: Statement
                      asText: a
                    - identifier: 1.8.rs1.tb1.ts1.ts3
                      $type:
                        - CheckStatement
                        - Selection
                      asText: storey
                      isOperationalizedBy:
                        hasTarget: is a storey
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.8.rs1.tb1.ts1.ts4
                      $type: Statement
                      asText: or
                    - identifier: 1.8.rs1.tb1.ts1.ts5
                      $type:
                        - CheckStatement
                        - Selection
                      asText: room
                      isOperationalizedBy:
                        hasTarget: is a room
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.8.rs1.tb1.ts1.ts6
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: has more than one exit
                      isOperationalizedBy:
                        hasTarget: number of exits
                        hasComparator: +amp;gt;
                        hasValue: "1"
                    - identifier: 1.8.rs1.tb1.ts1.ts7
                      $type: Statement
                      asText: ","
                - identifier: 1.8.rs1.tb1.ts2
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    it must be assumed that a fire might prevent the occupants from
                    using one of them. Therefore, when deciding on the total width of exits
                    needed the largest exit should be discounted . Table 4 gives the required
                    exit width against a maximum number of persons. It should be noted that
                    the required storey exit width can affect the required stair width because
                    stairs need to be at least as wide as any storey exit leading onto them
                    . Table 5, provides the minimum clear width of doors, recommended in AD
                    M.
                  hasInlinePart:
                    - identifier: 1.8.rs1.tb1.ts2.ts1
                      $type: Statement
                      asText:
                        it must be assumed that a fire might prevent the occupants from
                        using one of them. Therefore, when deciding on the
                    - identifier: 1.8.rs1.tb1.ts2.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: total width of exits needed the largest exit should be discounted
                      isOperationalizedBy:
                        hasTarget:
                          the largest exit has been discounted from the total width
                          when aggregating width of escape routes
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.8.rs1.tb1.ts2.ts3
                      $type: Statement
                      asText:
                        . Table 4 gives the required exit width against a maximum number
                        of persons. It should be noted that the required storey exit width can
                        affect the required stair width because
                    - identifier: 1.8.rs1.tb1.ts2.ts4
                      $type:
                        - CheckStatement
                        - Requirement
                      asText:
                        stairs need to be at least as wide as any storey exit leading
                        onto them
                      isOperationalizedBy:
                        hasTarget:
                          stair is at least as wide as any storey exit leading onto
                          them
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.8.rs1.tb1.ts2.ts5
                      $type: Statement
                      asText:
                        . Table 5, provides the minimum clear width of doors, recommended
                        in AD M.
            - identifier: 1.8.rs1.tb2
              $type:
                - Statement
                - CheckStatement
                - RequirementSection
              asText:
                Where a ground floor storey exit shares a final exit with a stair
                via a ground floor lobby , the width of the final exit should be sufficient
                to enable a maximum evacuation flow rate equal to or greater than that from
                the storey exit and stair combined (see Figure 3).
              hasInlinePart:
                - identifier: 1.8.rs1.tb2.ts1
                  $type:
                    - CheckStatement
                    - Application
                  asText:
                    Where a ground floor storey exit shares a final exit with a stair
                    via a ground floor lobby
                  isOperationalizedBy:
                    hasTarget:
                      ground floor storey exit shares a final exit with a stair via
                      a ground floor lobby
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.8.rs1.tb2.ts2
                  $type: Statement
                  asText: ", the"
                - identifier: 1.8.rs1.tb2.ts3
                  $type:
                    - CheckStatement
                    - Requirement
                  asText:
                    width of the final exit should be sufficient to enable a maximum
                    evacuation flow rate equal to or greater than that from the storey exit
                    and stair combined
                  isOperationalizedBy:
                    hasTarget:
                      width of the final exit is sufficient to enable a maximum evacuation
                      flow rate equal to or greater than that from the storey exit and stair
                      combined
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.8.rs1.tb2.ts4
                  $type: Statement
                  asText: (see Figure 3).
            - identifier: 1.8.rs1.tb3
              $type: Statement
              asText: "This can be calculated from the following formula:"
              hasPart:
                - identifier: 1.8.rs1.tb3.tb1
                  $type: Statement
                  asText:
                    WW = ((N/2.5)+(60SS))/80 Where:W = width of final exit, in metresN
                    = number of people served by ground floor storey exitS = stair width in
                    metres
            - identifier: 1.8.rs1.1
              $type: DocumentSubdivision
              title: Worked example
              hasPart:
                - identifier: 1.8.rs1.1.tb1
                  $type: Statement
                  asText: ""
                  hasPart:
                    - identifier: 1.8.rs1.1.tb1.tb1
                      $type: Statement
                      asText:
                        A ground floor storey exit serving 250 persons shares a common
                        final exit with a 1.2m wide stair. Required final exit = ((250/2.5)+(60*1.2))/80=2.150m
    - identifier: "1.9"
      $type: DocumentSubdivision
      title: Corridors
      hasPart:
        - identifier: 1.9.tb1
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            Where a corridor is used for means of escape , but it is not a protected
            corridor and is enclosed by non-fire-resistant partitions , the partitions
            should be carried up to the soffit of the floor above , or to a suspended
            ceiling . They will then provide some defence against the spread of smoke
            in the early stages of a fire, but the rooms do not need to be provided with
            fire doors.
          hasInlinePart:
            - identifier: 1.9.tb1.ts1
              $type:
                - CheckStatement
                - ApplicationSection
              asText:
                Where a corridor is used for means of escape , but it is not a protected
                corridor and is enclosed by non-fire-resistant partitions ,
              hasInlinePart:
                - identifier: 1.9.tb1.ts1.ts1
                  $type: Statement
                  asText: Where a
                - identifier: 1.9.tb1.ts1.ts2
                  $type:
                    - CheckStatement
                    - Application
                  asText: corridor
                  isOperationalizedBy:
                    hasTarget: corridor
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.9.tb1.ts1.ts3
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: is used for means of escape
                  isOperationalizedBy:
                    hasTarget: is used for means of escape
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.9.tb1.ts1.ts4
                  $type: Statement
                  asText: ", but"
                - identifier: 1.9.tb1.ts1.ts5
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: it is not a protected corridor
                  isOperationalizedBy:
                    hasTarget: is a protected corridor
                    hasComparator: "="
                    hasValue: "false"
                - identifier: 1.9.tb1.ts1.ts6
                  $type: Statement
                  asText: and
                - identifier: 1.9.tb1.ts1.ts7
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: is enclosed by non-fire-resistant partitions
                  isOperationalizedBy:
                    hasTarget: is enclosed by non-fire-resistant partitions
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.9.tb1.ts1.ts8
                  $type: Statement
                  asText: ","
            - identifier: 1.9.tb1.ts2
              $type:
                - CheckStatement
                - RequirementSection
              asText:
                the partitions should be carried up to the soffit of the floor above
                , or to a suspended ceiling .
              hasInlinePart:
                - identifier: 1.9.tb1.ts2.ts1
                  $type: Statement
                  asText: the partitions should be
                - identifier: 1.9.tb1.ts2.ts2
                  $type:
                    - CheckStatement
                    - ExceptionSection
                  asText: carried up to the soffit of the floor above ,
                  hasInlinePart:
                    - identifier: 1.9.tb1.ts2.ts2.ts1
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: carried up to the soffit of the floor above
                      isOperationalizedBy:
                        hasTarget: partitions are carried up to the soffit of the floor above
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.tb1.ts2.ts2.ts2
                      $type: Statement
                      asText: ","
                - identifier: 1.9.tb1.ts2.ts3
                  $type:
                    - CheckStatement
                    - ExceptionSection
                  asText: or to a suspended ceiling .
                  hasInlinePart:
                    - identifier: 1.9.tb1.ts2.ts3.ts1
                      $type: Statement
                      asText: or
                    - identifier: 1.9.tb1.ts2.ts3.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: to a suspended ceiling
                      isOperationalizedBy:
                        hasTarget: partitions are carried up to the suspended ceiling
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.tb1.ts2.ts3.ts3
                      $type: Statement
                      asText: .
            - identifier: 1.9.tb1.ts3
              $type: Statement
              asText:
                They will then provide some defence against the spread of smoke in
                the early stages of a fire, but the rooms do not need to be provided with
                fire doors.
        - identifier: 1.9.rs1
          $type: RequirementSection
          hasPart:
            - identifier: 1.9.rs1.tb2
              $type: Statement
              asText:
                If a corridor provides access to alternative escape routes , there
                is a risk that smoke will spread along it and make both routes impassable.
                To avoid this, every corridor more than 12m long that connects two or more
                storey exits , should be sub-divided by one or more self-closing fire doors
                and any necessary associated screens . The fire doors (and any associated
                screens ) should be positioned approximately mid-way between the two storey
                exits to effectively safeguard the route from smoke, taking account of the
                layout of the corridor and any adjacent fire risks, see Figure 4.
              hasInlinePart:
                - identifier: 1.9.rs1.tb2.ts1
                  $type:
                    - CheckStatement
                    - ApplicationSection
                  asText:
                    If a corridor provides access to alternative escape routes , there
                    is a risk that smoke will spread along it and make both routes impassable.
                  hasInlinePart:
                    - identifier: 1.9.rs1.tb2.ts1.ts1
                      $type: Statement
                      asText: If a
                    - identifier: 1.9.rs1.tb2.ts1.ts2
                      $type:
                        - CheckStatement
                        - Application
                      asText: corridor
                      isOperationalizedBy:
                        hasTarget: corridor
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.rs1.tb2.ts1.ts3
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: provides access to alternative escape routes
                      isOperationalizedBy:
                        hasTarget: provides access to alternative escape routes
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.rs1.tb2.ts1.ts4
                      $type: Statement
                      asText:
                        ", there is a risk that smoke will spread along it and make both
                        routes impassable."
                - identifier: 1.9.rs1.tb2.ts2
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    To avoid this, every corridor more than 12m long that connects two
                    or more storey exits , should be sub-divided by one or more self-closing
                    fire doors and any necessary associated screens .
                  hasInlinePart:
                    - identifier: 1.9.rs1.tb2.ts2.ts1
                      $type: Statement
                      asText: To avoid this, every
                    - identifier: 1.9.rs1.tb2.ts2.ts2
                      $type:
                        - CheckStatement
                        - ApplicationSection
                      asText:
                        corridor more than 12m long that connects two or more storey exits
                        ,
                      hasInlinePart:
                        - identifier: 1.9.rs1.tb2.ts2.ts2.ts1
                          $type:
                            - CheckStatement
                            - Application
                          asText: corridor
                          isOperationalizedBy:
                            hasTarget: corridor
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb2.ts2.ts2.ts2
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: more than 12m long
                          isOperationalizedBy:
                            hasTarget: length
                            hasComparator: +amp;gt;
                            hasValue: "12"
                            hasUnit: m
                        - identifier: 1.9.rs1.tb2.ts2.ts2.ts3
                          $type: Statement
                          asText: that
                        - identifier: 1.9.rs1.tb2.ts2.ts2.ts4
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: connects two or more storey exits
                          isOperationalizedBy:
                            hasTarget: connects a number of storeys
                            hasComparator: +amp;gt;=
                            hasValue: "2"
                        - identifier: 1.9.rs1.tb2.ts2.ts2.ts5
                          $type: Statement
                          asText: ","
                    - identifier: 1.9.rs1.tb2.ts2.ts3
                      $type:
                        - CheckStatement
                        - RequirementSection
                      asText:
                        should be sub-divided by one or more self-closing fire doors and
                        any necessary associated screens .
                      hasInlinePart:
                        - identifier: 1.9.rs1.tb2.ts2.ts3.ts1
                          $type: Statement
                          asText: should
                        - identifier: 1.9.rs1.tb2.ts2.ts3.ts2
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: be sub-divided by one or more self-closing fire doors
                          isOperationalizedBy:
                            hasTarget: is sub-divided by a number of self-closing fire doors
                            hasComparator: +amp;gt;=
                            hasValue: "1"
                        - identifier: 1.9.rs1.tb2.ts2.ts3.ts3
                          $type: Statement
                          asText: and
                        - identifier: 1.9.rs1.tb2.ts2.ts3.ts4
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: any necessary associated screens
                          isOperationalizedBy:
                            hasTarget: is sub-divided by any necessary associated screens
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb2.ts2.ts3.ts5
                          $type: Statement
                          asText: .
                - identifier: 1.9.rs1.tb2.ts3
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    The fire doors (and any associated screens ) should be positioned
                    approximately mid-way between the two storey exits to effectively safeguard
                    the route from smoke, taking account of the layout of the corridor and
                    any adjacent fire risks, see Figure 4.
                  hasInlinePart:
                    - identifier: 1.9.rs1.tb2.ts3.ts1
                      $type: Statement
                      asText: The
                    - identifier: 1.9.rs1.tb2.ts3.ts2
                      $type:
                        - CheckStatement
                        - RequirementSection
                      asText: fire doors (and any associated screens )
                      hasInlinePart:
                        - identifier: 1.9.rs1.tb2.ts3.ts2.ts1
                          $type:
                            - CheckStatement
                            - Application
                          asText: fire doors
                          isOperationalizedBy:
                            hasTarget: is associated with a fire door
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb2.ts3.ts2.ts2
                          $type: Statement
                          asText: (and
                        - identifier: 1.9.rs1.tb2.ts3.ts2.ts3
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: any
                          isOperationalizedBy:
                            hasTarget:
                              is positioned approximately mid-way between the two storey
                              exits
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb2.ts3.ts2.ts4
                          $type: Statement
                          asText: associated
                        - identifier: 1.9.rs1.tb2.ts3.ts2.ts5
                          $type:
                            - CheckStatement
                            - Application
                          asText: screens
                          isOperationalizedBy:
                            hasTarget: fire screen
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb2.ts3.ts2.ts6
                          $type: Statement
                          asText: )
                    - identifier: 1.9.rs1.tb2.ts3.ts3
                      $type:
                        - CheckStatement
                        - RequirementSection
                      asText:
                        should be positioned approximately mid-way between the two storey
                        exits to effectively safeguard the route from smoke, taking account
                        of the layout of the corridor and any adjacent fire risks, see Figure
                        4.
                      hasInlinePart:
                        - identifier: 1.9.rs1.tb2.ts3.ts3.ts1
                          $type:
                            - CheckStatement
                            - Application
                          asText: should
                          isOperationalizedBy:
                            hasTarget: fire door
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb2.ts3.ts3.ts2
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: be positioned approximately mid-way between the two storey exits
                          isOperationalizedBy:
                            hasTarget:
                              is positioned approximately mid-way between the two storey
                              exits
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb2.ts3.ts3.ts3
                          $type: Statement
                          asText:
                            to effectively safeguard the route from smoke, taking account
                            of the layout of the corridor and any adjacent fire risks, see Figure
                            4.
            - identifier: 1.9.rs1.tb3
              $type:
                - Statement
                - CheckStatement
                - RequirementSection
              asText:
                Where a cavity exists above the enclosures to such a corridor , because
                the enclosing materials are not carried up to the underside of the floor
                or roof above, cavity barriers should be fitted on the line of the enclosures
                to and across the corridor to prevent smoke bypass. Any door that could
                provide a path for smoke to bypass the sub-division should be made self-closing
                , but need not necessarily be fire-resisting.
              hasInlinePart:
                - identifier: 1.9.rs1.tb3.ts1
                  $type:
                    - CheckStatement
                    - ApplicationSection
                  asText: Where a cavity exists above the enclosures to such a corridor ,
                  hasInlinePart:
                    - identifier: 1.9.rs1.tb3.ts1.ts1
                      $type: Statement
                      asText: Where a
                    - identifier: 1.9.rs1.tb3.ts1.ts2
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: cavity exists above
                      isOperationalizedBy:
                        hasTarget: a cavity exists above
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.rs1.tb3.ts1.ts3
                      $type: Statement
                      asText: the
                    - identifier: 1.9.rs1.tb3.ts1.ts4
                      $type:
                        - CheckStatement
                        - Application
                      asText: enclosures
                      isOperationalizedBy:
                        hasTarget: enclosure
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.rs1.tb3.ts1.ts5
                      $type: Statement
                      asText: to
                    - identifier: 1.9.rs1.tb3.ts1.ts6
                      $type:
                        - CheckStatement
                        - Application
                      asText: such a corridor
                      isOperationalizedBy:
                        hasTarget: to the a corridor
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.rs1.tb3.ts1.ts7
                      $type: Statement
                      asText: ","
                - identifier: 1.9.rs1.tb3.ts2
                  $type: Statement
                  asText:
                    because the enclosing materials are not carried up to the underside
                    of the floor or roof above,
                - identifier: 1.9.rs1.tb3.ts3
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    cavity barriers should be fitted on the line of the enclosures to
                    and across the corridor to prevent smoke bypass.
                  hasInlinePart:
                    - identifier: 1.9.rs1.tb3.ts3.ts1
                      $type:
                        - CheckStatement
                        - Requirement
                      asText:
                        cavity barriers should be fitted on the line of the enclosures
                        to
                      isOperationalizedBy:
                        hasTarget:
                          cavity barriers are fitted on the line of the enclosure to
                          the corridor
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.rs1.tb3.ts3.ts2
                      $type: Statement
                      asText: and
                    - identifier: 1.9.rs1.tb3.ts3.ts3
                      $type:
                        - CheckStatement
                        - Requirement
                      asText: across the corridor
                      isOperationalizedBy:
                        hasTarget:
                          cavity barriers are fitted on the line of the enclosure across
                          the corridor
                        hasComparator: "="
                        hasValue: "true"
                    - identifier: 1.9.rs1.tb3.ts3.ts4
                      $type: Statement
                      asText: to prevent smoke bypass.
                - identifier: 1.9.rs1.tb3.ts4
                  $type:
                    - CheckStatement
                    - RequirementSection
                  asText:
                    Any door that could provide a path for smoke to bypass the sub-division
                    should be made self-closing , but need not necessarily be fire-resisting.
                  hasInlinePart:
                    - identifier: 1.9.rs1.tb3.ts4.ts1
                      $type: Statement
                      asText: Any
                    - identifier: 1.9.rs1.tb3.ts4.ts2
                      $type:
                        - CheckStatement
                        - ApplicationSection
                      asText: door that could provide a path for smoke to bypass the sub-division
                      hasInlinePart:
                        - identifier: 1.9.rs1.tb3.ts4.ts2.ts1
                          $type:
                            - CheckStatement
                            - Application
                          asText: door
                          isOperationalizedBy:
                            hasTarget: door
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb3.ts4.ts2.ts2
                          $type: Statement
                          asText: that could
                        - identifier: 1.9.rs1.tb3.ts4.ts2.ts3
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: provide a path for smoke to bypass the sub-division
                          isOperationalizedBy:
                            hasTarget: provides a path for smoke to bypass the sub-division
                            hasComparator: "="
                            hasValue: "true"
                    - identifier: 1.9.rs1.tb3.ts4.ts3
                      $type:
                        - CheckStatement
                        - RequirementSection
                      asText: should be made self-closing , but need not necessarily be fire-resisting.
                      hasInlinePart:
                        - identifier: 1.9.rs1.tb3.ts4.ts3.ts1
                          $type: Statement
                          asText: should be made
                        - identifier: 1.9.rs1.tb3.ts4.ts3.ts2
                          $type:
                            - CheckStatement
                            - Requirement
                          asText: self-closing
                          isOperationalizedBy:
                            hasTarget: is self-closing
                            hasComparator: "="
                            hasValue: "true"
                        - identifier: 1.9.rs1.tb3.ts4.ts3.ts3
                          $type: Statement
                          asText: ", but need not necessarily be fire-resisting."
    - identifier: "1.10"
      $type: DocumentSubdivision
      title: Dead-end corridors
      hasPart:
        - identifier: 1.10.tb1
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            Dead-end corridors should be avoided when it is practical to do so,
            but where they are present, they should be enclosed in fire resistant construction
            up to the point that escape becomes available in two directions . The need
            to provide a protected corridor does not apply to short recesses of less than
            2m ; or longer corridors serving rooms with limited fire risk , e.g. toilet
            accommodation.
          hasInlinePart:
            - identifier: 1.10.tb1.ts1
              $type:
                - CheckStatement
                - ApplicationSection
              asText: Dead-end corridors
              hasInlinePart:
                - identifier: 1.10.tb1.ts1.ts1
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: Dead-end
                  isOperationalizedBy:
                    hasTarget: is dead-end
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb1.ts1.ts2
                  $type:
                    - CheckStatement
                    - Application
                  asText: corridors
                  isOperationalizedBy:
                    hasTarget: corridor
                    hasComparator: "="
                    hasValue: "true"
            - identifier: 1.10.tb1.ts2
              $type:
                - CheckStatement
                - RequirementSection
              asText:
                should be avoided when it is practical to do so, but where they are
                present, they should be enclosed in fire resistant construction up to the
                point that escape becomes available in two directions .
              hasInlinePart:
                - identifier: 1.10.tb1.ts2.ts1
                  $type: Statement
                  asText:
                    should be avoided when it is practical to do so, but where they
                    are present, they should
                - identifier: 1.10.tb1.ts2.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText:
                    be enclosed in fire resistant construction up to the point that
                    escape becomes available in two directions
                  isOperationalizedBy:
                    hasTarget:
                      is enclosed in fire resistant construction up to the point
                      that escape becomes available in two directions
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb1.ts2.ts3
                  $type: Statement
                  asText: .
            - identifier: 1.10.tb1.ts3
              $type: Statement
              asText: The need to provide a protected corridor does not apply to short
            - identifier: 1.10.tb1.ts4
              $type:
                - CheckStatement
                - ExceptionSection
                - Exception
              asText: recesses of less than 2m
              isOperationalizedBy:
                hasTarget: length
                hasComparator: +amp;lt;
                hasValue: "2"
                hasUnit: m
            - identifier: 1.10.tb1.ts5
              $type: Statement
              asText: ; or
            - identifier: 1.10.tb1.ts6
              $type:
                - CheckStatement
                - ExceptionSection
              asText:
                longer corridors serving rooms with limited fire risk , e.g. toilet
                accommodation.
              hasInlinePart:
                - identifier: 1.10.tb1.ts6.ts1
                  $type:
                    - CheckStatement
                    - Application
                  asText: longer corridors
                  isOperationalizedBy:
                    hasTarget: length
                    hasComparator: +amp;gt;=
                    hasValue: "2"
                    hasUnit: m
                - identifier: 1.10.tb1.ts6.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: serving rooms with limited fire risk
                  isOperationalizedBy:
                    hasTarget: serves room with limited fire risk
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb1.ts6.ts3
                  $type: Statement
                  asText: ", e.g. toilet accommodation."
        - identifier: 1.10.tb2
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            When a dead-end corridor is longer than 4.5 m it should be provided
            with self- closing fire doors (with smoke seals ) to separate it from where
            escape becomes available in more than one direction , or where the corridor
            continues past one storey exit to another .
          hasInlinePart:
            - identifier: 1.10.tb2.ts1
              $type:
                - CheckStatement
                - ApplicationSection
              asText: When a dead-end corridor is longer than 4.5 m
              hasInlinePart:
                - identifier: 1.10.tb2.ts1.ts1
                  $type: Statement
                  asText: When a
                - identifier: 1.10.tb2.ts1.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: dead-end
                  isOperationalizedBy:
                    hasTarget: is dead-end
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb2.ts1.ts3
                  $type:
                    - CheckStatement
                    - Application
                  asText: corridor
                  isOperationalizedBy:
                    hasTarget: corridor
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb2.ts1.ts4
                  $type: Statement
                  asText: is
                - identifier: 1.10.tb2.ts1.ts5
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: longer than 4.5 m
                  isOperationalizedBy:
                    hasTarget: length
                    hasComparator: +amp;gt;
                    hasValue: "4.5"
                    hasUnit: m
            - identifier: 1.10.tb2.ts2
              $type:
                - CheckStatement
                - RequirementSection
              asText:
                it should be provided with self- closing fire doors (with smoke seals
                ) to separate it from where escape becomes available in more than one direction
                , or where the corridor continues past one storey exit to another .
              hasInlinePart:
                - identifier: 1.10.tb2.ts2.ts1
                  $type: Statement
                  asText: it should be provided with
                - identifier: 1.10.tb2.ts2.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: self- closing fire doors
                  isOperationalizedBy:
                    hasTarget: self-closing fire door is provided
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb2.ts2.ts3
                  $type: Statement
                  asText: (with
                - identifier: 1.10.tb2.ts2.ts4
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: smoke seals
                  isOperationalizedBy:
                    hasTarget: smoke seal is provided
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb2.ts2.ts5
                  $type: Statement
                  asText: ) to
                - identifier: 1.10.tb2.ts2.ts6
                  $type:
                    - CheckStatement
                    - Selection
                  asText:
                    separate it from where escape becomes available in more than one
                    direction
                  isOperationalizedBy:
                    hasTarget:
                      self-closing fire doors and smoke seals separate it from where
                      escape becomes available in more than one direction
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb2.ts2.ts7
                  $type: Statement
                  asText: ", or"
                - identifier: 1.10.tb2.ts2.ts8
                  $type:
                    - CheckStatement
                    - Selection
                  asText: where the corridor continues past one storey exit to another
                  isOperationalizedBy:
                    hasTarget:
                      self-closing fire door and smoke seal separate it from where
                      the corridor continues past one storey exit to another
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.10.tb2.ts2.ts9
                  $type: Statement
                  asText: .
    - identifier: "1.11"
      $type: DocumentSubdivision
      title: External escape routes
      hasPart:
        - identifier: 1.11.tb1
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            Where an external escape route (other than a stair ) is beside an external
            wall of the building , that part of the external wall within 1800mm of the
            escape route should be of fire-resisting construction , up to a height of
            1100mm above the paving level of the route .
          hasInlinePart:
            - identifier: 1.11.tb1.ts1
              $type:
                - CheckStatement
                - ApplicationSection
              asText:
                Where an external escape route (other than a stair ) is beside an
                external wall of the building ,
              hasInlinePart:
                - identifier: 1.11.tb1.ts1.ts1
                  $type: Statement
                  asText: Where an
                - identifier: 1.11.tb1.ts1.ts2
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: external
                  isOperationalizedBy:
                    hasTarget: is external
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.11.tb1.ts1.ts3
                  $type:
                    - CheckStatement
                    - Application
                  asText: escape route
                  isOperationalizedBy:
                    hasTarget: escape route
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.11.tb1.ts1.ts4
                  $type: Statement
                  asText: (other than a
                - identifier: 1.11.tb1.ts1.ts5
                  $type:
                    - CheckStatement
                    - Exception
                  asText: stair
                  isOperationalizedBy:
                    hasTarget: includes A Stairway
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.11.tb1.ts1.ts6
                  $type: Statement
                  asText: ) is
                - identifier: 1.11.tb1.ts1.ts7
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: beside an external wall of the building
                  isOperationalizedBy:
                    hasTarget: is beside an external wall of the building
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.11.tb1.ts1.ts8
                  $type: Statement
                  asText: ","
            - identifier: 1.11.tb1.ts2
              $type:
                - CheckStatement
                - RequirementSection
              asText:
                that part of the external wall within 1800mm of the escape route should
                be of fire-resisting construction , up to a height of 1100mm above the paving
                level of the route .
              hasInlinePart:
                - identifier: 1.11.tb1.ts2.ts1
                  $type:
                    - CheckStatement
                    - Requirement
                  asText:
                    that part of the external wall within 1800mm of the escape route
                    should be of fire-resisting construction
                  isOperationalizedBy:
                    hasTarget:
                      the part of the external wall within 1800mm horizontally of
                      the escape route is of fire-resisting construction
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.11.tb1.ts2.ts2
                  $type: Statement
                  asText: ","
                - identifier: 1.11.tb1.ts2.ts3
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: up to a height of 1100mm above the paving level of the route
                  isOperationalizedBy:
                    hasTarget:
                      the part of the external wall up to a height of 1100mm above
                      the paving level of the route is of fire-resisting construction
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.11.tb1.ts2.ts4
                  $type: Statement
                  asText: .
    - identifier: "1.12"
      $type: DocumentSubdivision
      title: Security
      hasPart:
        - identifier: 1.12.tb1
          $type:
            - Statement
            - CheckStatement
            - RequirementSection
          asText:
            Security is an important consideration for school buildings, leading
            to the need for doors to be secured against entry , including when the school
            is occupied. This is acceptable, as long as these doors are provided with
            suitable emergency hardware , often referred to as 'panic hardware' to ensure
            that they can be opened whenever the need arises. Electrically powered locks
            should fail-safe open on alarm and loss of power or by the activation of a
            manual release unit (Type A) to BS 7273-4 , positioned on the side of the
            door that the escaping occupants are approaching .
          hasInlinePart:
            - identifier: 1.12.tb1.ts1
              $type: Statement
              asText:
                Security is an important consideration for school buildings, leading
                to the need for
            - identifier: 1.12.tb1.ts2
              $type:
                - CheckStatement
                - ApplicationSection
              asText: doors to be secured against entry
              hasInlinePart:
                - identifier: 1.12.tb1.ts2.ts1
                  $type:
                    - CheckStatement
                    - Application
                  asText: doors
                  isOperationalizedBy:
                    hasTarget: door
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.12.tb1.ts2.ts2
                  $type: Statement
                  asText: to be
                - identifier: 1.12.tb1.ts2.ts3
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: secured against entry
                  isOperationalizedBy:
                    hasTarget: is secured against entry
                    hasComparator: "="
                    hasValue: "true"
            - identifier: 1.12.tb1.ts3
              $type: Statement
              asText:
                ", including when the school is occupied. This is acceptable, as long
                as these"
            - identifier: 1.12.tb1.ts4
              $type:
                - CheckStatement
                - RequirementSection
                - Requirement
              asText: doors are provided with suitable emergency hardware
              isOperationalizedBy:
                hasTarget: is provided with suitable emergency hardware
                hasComparator: "="
                hasValue: "true"
            - identifier: 1.12.tb1.ts5
              $type: Statement
              asText:
                ", often referred to as 'panic hardware' to ensure that they can
                be opened whenever the need arises."
            - identifier: 1.12.tb1.ts6
              $type:
                - CheckStatement
                - RequirementSection
              asText:
                Electrically powered locks should fail-safe open on alarm and loss
                of power or by the activation of a manual release unit (Type A) to BS 7273-4
                , positioned on the side of the door that the escaping occupants are approaching
                .
              hasInlinePart:
                - identifier: 1.12.tb1.ts6.ts1
                  $type:
                    - CheckStatement
                    - Application
                  asText: Electrically powered
                  isOperationalizedBy:
                    hasTarget: lock is electrically powered
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.12.tb1.ts6.ts2
                  $type: Statement
                  asText: locks should
                - identifier: 1.12.tb1.ts6.ts3
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: fail-safe open on alarm
                  isOperationalizedBy:
                    hasTarget: fail-safe open on alarm
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.12.tb1.ts6.ts4
                  $type: Statement
                  asText: and
                - identifier: 1.12.tb1.ts6.ts5
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: loss of power
                  isOperationalizedBy:
                    hasTarget: fail-safe open on loss of power
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.12.tb1.ts6.ts6
                  $type: Statement
                  asText: or
                - identifier: 1.12.tb1.ts6.ts7
                  $type:
                    - CheckStatement
                    - Requirement
                  asText: by the activation of a manual release unit (Type A) to BS 7273-4
                  isOperationalizedBy:
                    hasTarget:
                      fail-safe open by activation of a manual release unit (Type
                      A) complying with BS 7273-4
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.12.tb1.ts6.ts8
                  $type: Statement
                  asText: ","
                - identifier: 1.12.tb1.ts6.ts9
                  $type:
                    - CheckStatement
                    - Requirement
                  asText:
                    positioned on the side of the door that the escaping occupants are
                    approaching
                  isOperationalizedBy:
                    hasTarget:
                      manual release unit is positioned on the side of the door that
                      the escaping occupants are approaching
                    hasComparator: "="
                    hasValue: "true"
                - identifier: 1.12.tb1.ts6.ts10
                  $type: Statement
                  asText: "the escaping occupants are approaching"
                - identifier: 1.12.tb1.ts6.ts11
                  $type: Statement
                  asText: .

</code></pre>