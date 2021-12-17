<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/profilemenudesktop.css" />
    <link rel="stylesheet" type="text/css" href="css/videocardmobile.css" />
    <link rel="stylesheet" type="text/css" href="css/profilemenutablet.css" />
    <link rel="stylesheet" type="text/css" href="css/videocarddesktop.css" />
    <link rel="stylesheet" type="text/css" href="css/videocardtablet.css" />
    <link rel="stylesheet" type="text/css" href="css/sidebarmenumobile.css" />
    <link rel="stylesheet" type="text/css" href="css/tablet768classes.css" />
    <link rel="stylesheet" type="text/css" href="css/sidebarmenutablet.css" />
    <link rel="stylesheet" type="text/css" href="css/profilemenumobile.css" />
    <style></style>
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #f9f9f9">
    <input type="hidden" id="anPageName" name="page" value="tablet768classes" />
    <div class="container-center-horizontal">
      <div class="mobile375classes screen">
        <div class="top-bar-mobile">
          <a href="javascript:ShowOverlay('sidebarmenumobile', 'animate-appear');" class="align-self-flex-end">
            <div class="menu-icon">
              <img class="path-3" src="img/mobile-375---classes-path-3-9D274E4A-9594-4F4A-BA53-A47D47FEAB49@2x.png" />
              <img class="path-2" src="img/mobile-375---classes-path-2-D9C6EB73-4DB9-4900-AA81-2B197FACA001@2x.png" />
              <img
                class="path-1-1"
                src="img/mobile-375---classes-path-1-872E33A6-10A3-45FB-B57C-8A97AAC61037@2x.png"
              /></div
          ></a>
          <div class="search-icon-1">
            <div class="overlap-group-2">
              <div class="oval-1"></div>
              <img class="path-4" src="img/mobile-375---dashboard-path-60ACB7FE-954F-48E6-A8A6-10CF5597E3F9@2x.png" />
            </div>
          </div>
          <div class="group-2">
            <input
              class="text-search-1 lato-normal-black-12px-2"
              name="textsearch"
              placeholder="Search"
              type="text"
              required
            />
          </div>
          <a href="javascript:ShowOverlay('profilemenumobile', 'animate-appear');"
            ><img
              class="avatar-1"
              src="img/desktop-1280---classes--avatar-D8D7AF01-399A-4077-BEC6-341A1E24038F@2x.png"
            />
          </a>
        </div>
        <div class="classes-2">
          <div class="classes-3 castoro-regular-normal-black-16px">Classes</div>
          <a href="javascript:ShowOverlay('videocardmobile', 'animate-appear');">
            <div class="class-card-1-big">
              <div class="overlap-group11-1">
                <div class="play-button-hover-big">
                  <div class="play-button-container-1">
                    <img
                      class="play-button-bg-big"
                      src="img/tablet-768---classes-play-button-bg-big-6FBD6780-ED74-411C-8DEE-459B68BD2925.png"
                    />
                    <div class="play-button-icon-2">
                      <div class="play-button-icon-3">
                        <img
                          class="path-5"
                          src="img/desktop-1280---classes--path-609256FB-E4DB-4429-A1B8-41B9FDCD9D4C@2x.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-row-1">
                <div class="title-container-7">
                  <div class="title-12 lato-normal-black-18px">Skipping jump</div>
                  <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;18:00 min</p>
                </div>
                <div class="emptyhearticon12 component component-wrapper not-ready">
                  <div class="full-heart-icon-OJeIFk">
                    <div class="rectangle-oEcMZ5"></div>
                    <img
                      class="path-oEcMZ5"
                      src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                    />
                    <img
                      class="path-evWTD3"
                      src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                    />
                  </div>
                  <img
                    class="empty-heart-icon-OJeIFk hidden"
                    src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                  />
                </div>
                <script defer>
                  document.querySelector(".emptyhearticon12.component-wrapper").timeline_data = [
                    {
                      initial_state_name: "state1",
                      root_element: ".emptyhearticon12",
                      states_flow: {
                        state1: {
                          listeners: [
                            {
                              animations: {
                                ".empty-heart-icon-OJeIFk": {
                                  delay: 0,
                                  duration: 200,
                                  easing: "ease-in-out",
                                },
                                ".full-heart-icon-OJeIFk": {
                                  delay: 0,
                                  duration: 200,
                                  easing: "ease-in-out",
                                },
                              },
                              change_to_state: "state2",
                              listener_type: "click",
                              target_selector: ".full-heart-icon-OJeIFk",
                            },
                          ],
                          overrides: {},
                        },
                        state2: {
                          listeners: [
                            {
                              animations: {
                                ".empty-heart-icon-OJeIFk": {
                                  delay: 0,
                                  duration: 200,
                                  easing: "ease-in-out",
                                },
                                ".full-heart-icon-OJeIFk": {
                                  delay: 0,
                                  duration: 200,
                                  easing: "ease-in-out",
                                },
                              },
                              change_to_state: "state1",
                              listener_type: "click",
                              target_selector: ".empty-heart-icon-OJeIFk",
                            },
                          ],
                          overrides: {
                            ".empty-heart-icon-OJeIFk": {
                              opacity: 1,
                            },
                            ".full-heart-icon-OJeIFk": {
                              opacity: 0,
                            },
                          },
                        },
                      },
                    },
                  ];
                </script>
              </div>
            </div></a
          >
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-1"></div>
                <div class="flex-row-1">
                  <div class="title-container-8">
                    <div class="title-13 lato-normal-black-18px">Yoga with Cherry</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration - 20:22 min</p>
                  </div>
                  <div class="emptyhearticon11 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-ObpJJe"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-ObpJJe hidden">
                      <div class="rectangle-GiwMKz"></div>
                      <img
                        class="shape-GiwMKz"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-AS9YVH"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon11.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon11",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-ObpJJe": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-ObpJJe",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-ObpJJe": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-ObpJJe",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-ObpJJe": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-2"></div>
                <div class="flex-row-1">
                  <div class="title-container-7">
                    <div class="title-14 lato-normal-black-18px">Burning Abs</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;18:57 min</p>
                  </div>
                  <div class="emptyhearticon10 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-wzIuxu"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-wzIuxu hidden">
                      <div class="rectangle-v07cm4"></div>
                      <img
                        class="shape-v07cm4"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-VY0JWq"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon10.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon10",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-wzIuxu": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-wzIuxu",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-wzIuxu": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-wzIuxu",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-wzIuxu": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-3"></div>
                <div class="flex-row-1">
                  <div class="title-container-9">
                    <div class="title-15 lato-normal-black-18px">Good morning stretches</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;19:22 min</p>
                  </div>
                  <div class="emptyhearticon9 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-WK5mCR"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-WK5mCR hidden">
                      <div class="rectangle-YCivv0"></div>
                      <img
                        class="shape-YCivv0"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-prOWoP"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon9.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon9",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-WK5mCR": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-WK5mCR",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-WK5mCR": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-WK5mCR",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-WK5mCR": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-4"></div>
                <div class="flex-row-1">
                  <div class="title-container-10">
                    <div class="title-16 lato-normal-black-18px">Dance party workout</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;20:00 min</p>
                  </div>
                  <div class="emptyhearticon8 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-Qmx7Hs"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-Qmx7Hs hidden">
                      <div class="rectangle-HLzbhx"></div>
                      <img
                        class="shape-HLzbhx"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-TmNF1w"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon8.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon8",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-Qmx7Hs": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-Qmx7Hs",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-Qmx7Hs": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-Qmx7Hs",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-Qmx7Hs": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-5"></div>
                <div class="flex-row-1">
                  <div class="title-container-11">
                    <div class="title-17 lato-normal-black-18px">Hips and thighs Tabata</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;19:00 min</p>
                  </div>
                  <div class="emptyhearticon6 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-ZSqewL"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-ZSqewL hidden">
                      <div class="rectangle-23QpKQ"></div>
                      <img
                        class="shape-23QpKQ"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-Md84jZ"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon6.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon6",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-ZSqewL": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-ZSqewL",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-ZSqewL": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-ZSqewL",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-ZSqewL": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-6"></div>
                <div class="flex-row-1">
                  <div class="title-container-12">
                    <div class="title-18 lato-normal-black-18px">Intermediate Pilates flow</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;17:50 min</p>
                  </div>
                  <div class="emptyhearticon5 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-Cdi50g"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-Cdi50g hidden">
                      <div class="rectangle-EwJu2J"></div>
                      <img
                        class="shape-EwJu2J"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-TTkLbK"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon5.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon5",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-Cdi50g": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-Cdi50g",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-Cdi50g": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-Cdi50g",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-Cdi50g": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-7"></div>
                <div class="flex-row-1">
                  <div class="title-container-8">
                    <div class="title-19 lato-normal-black-18px">Functional training</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration - 20:22 min</p>
                  </div>
                  <div class="emptyhearticon4 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-N9XrLv"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-N9XrLv hidden">
                      <div class="rectangle-rSNAtm"></div>
                      <img
                        class="shape-rSNAtm"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-jln1ag"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon4.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon4",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-N9XrLv": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-N9XrLv",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-N9XrLv": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-N9XrLv",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-N9XrLv": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-8"></div>
                <div class="flex-row-1">
                  <div class="title-container-7">
                    <div class="title-20 lato-normal-black-18px">Keep on strength</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;20:00 min</p>
                  </div>
                  <div class="emptyhearticon7 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-OxHMRv"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-OxHMRv hidden">
                      <div class="rectangle-NhdfTI"></div>
                      <img
                        class="shape-NhdfTI"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-q97uPm"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon7.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon7",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-OxHMRv": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-OxHMRv",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-OxHMRv": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-OxHMRv",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-OxHMRv": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-9"></div>
                <div class="flex-row-1">
                  <div class="title-container-7">
                    <div class="title-21 lato-normal-black-18px">Side body flow</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;22:40 min</p>
                  </div>
                  <div class="emptyhearticon3 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-UKH51s"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-UKH51s hidden">
                      <div class="rectangle-ls9Kse"></div>
                      <img
                        class="shape-ls9Kse"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-Smx2GR"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon3.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon3",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-UKH51s": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-UKH51s",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-UKH51s": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-UKH51s",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-UKH51s": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-10"></div>
                <div class="flex-row-1">
                  <div class="title-container-13">
                    <div class="title-22 lato-normal-black-18px">Weight-lifting practice</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;19:00 min</p>
                  </div>
                  <div class="emptyhearticon2 component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-fqfpk6"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-fqfpk6 hidden">
                      <div class="rectangle-NILuVx"></div>
                      <img
                        class="shape-NILuVx"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-BGoPyz"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon2.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon2",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-fqfpk6": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-fqfpk6",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-fqfpk6": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-fqfpk6",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-fqfpk6": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
          <div class="class-card-3">
            <div class="class-container-2">
              <div class="class-card-4">
                <div class="class-picture-11"></div>
                <div class="flex-row-1">
                  <div class="title-container-7">
                    <div class="title-23 lato-normal-black-18px">Aerobic exercises</div>
                    <p class="subtitle-1 lato-normal-black-14px">Class duration -&nbsp;&nbsp;21:00 min</p>
                  </div>
                  <div class="emptyhearticon component component-wrapper not-ready">
                    <img
                      class="empty-heart-icon-nA3xGI"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                    <div class="full-heart-icon-nA3xGI hidden">
                      <div class="rectangle-EFKDQm"></div>
                      <img
                        class="shape-EFKDQm"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="shape-SguAfW"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-nA3xGI": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-nA3xGI",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".full-heart-icon-nA3xGI": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-nA3xGI",
                              },
                            ],
                            overrides: {
                              ".full-heart-icon-nA3xGI": {
                                opacity: 1,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <img
                class="select-class-hover-1 hidden"
                src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-center-horizontal">
      <div class="desktop1280classes screen">
        <div class="top-bar-desktop">
          <div class="overlap-group12">
            <div class="search-tab">
              <div class="search-icon">
                <div class="overlap-group">
                  <div class="oval"></div>
                  <img
                    class="path"
                    src="img/desktop-1280---dashboard--path-E5C811DB-8BF1-47AF-A217-186914E544DE@2x.png"
                  />
                </div>
              </div>
              <input
                class="text-search lato-normal-black-16px"
                name="textsearch"
                placeholder="Search"
                type="text"
                required
              />
            </div>
            <a href="javascript:ShowOverlay('profilemenudesktop', 'animate-appear');"
              ><img
                class="avatar"
                src="img/desktop-1280---classes--avatar-D8D7AF01-399A-4077-BEC6-341A1E24038F@2x.png"
              />
            </a>
          </div>
        </div>
        <div class="side-bar-desktop">
          <div class="side-bar-desktop-1">
            <div class="icon-container">
              <a href="desktop1280dashboard.html">
                <div class="dashboard-icon">
                  <div class="overlap-group1">
                    <div class="hover-bg hidden"></div>
                  </div></div></a
              ><a href="desktop1280classes.html">
                <div class="classes-icon">
                  <div class="overlap-group-1">
                    <div class="hover-bg-1"></div>
                  </div></div
              ></a>
              <div class="x-icon">
                <img
                  class="x-icon-1"
                  src="img/desktop-1280---dashboard--contacts-icon-3DE411D9-47CA-4F88-B002-9CDE9AD746CA.svg"
                />
              </div>
              <div class="x-icon">
                <img
                  class="x-icon-1"
                  src="img/desktop-1280---classes--calendar-icon-6F5FD52B-2FA6-4413-9FF1-D963A7003C36@2x.svg"
                />
              </div>
              <div class="x-icon">
                <img
                  class="x-icon-1"
                  src="img/desktop-1280---dashboard--setting-icons-D8942D9C-071E-42BE-8DE8-7635C8A10A6A@2x.svg"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="overlap-group14">
          <div class="classes">
            <div class="class-container-1">
              <div class="classes-1 castoro-regular-normal-black-16px">Classes</div>
              <div class="class-card-1-1">
                <div class="overlap-group11">
                  <a href="javascript:ShowOverlay('videocarddesktop', 'animate-appear');">
                    <div class="play-button-hover">
                      <div class="play-button-container">
                        <img
                          class="play-button-bg"
                          src="img/desktop-1280---classes--play-button-bg-190D30FC-FBE3-4C6A-8989-7AE494EACDF8@2x.png"
                        />
                        <div class="play-button-icon">
                          <div class="play-button-icon-1">
                            <img
                              class="path-1"
                              src="img/desktop-1280---classes--path-609256FB-E4DB-4429-A1B8-41B9FDCD9D4C@2x.png"
                            />
                          </div>
                        </div>
                      </div></div
                  ></a>
                  <div class="tour-bubble-right">
                    <div class="overlap-group1-1">
                      <div class="pulsingdot component component-wrapper not-ready">
                        <img
                          class="oval-BKSJx7"
                          src="img/desktop-1280---dashboard--oval-9151214D-71FA-42DB-AFE1-2CF04E8799E3@4x.png"
                        />
                        <img
                          class="oval-4Rn6rX"
                          src="img/profile-menu-desktop-oval-C2B00AB9-CE8C-4F22-9E89-325F993C036C@4x.png"
                        />
                      </div>
                      <script defer>
                        document.querySelector(".pulsingdot.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".pulsingdot",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".oval-4Rn6rX": {
                                        delay: 0,
                                        duration: 1000,
                                        easing: "ease-in-out",
                                      },
                                      ".oval-BKSJx7": {
                                        delay: 0,
                                        duration: 1000,
                                        easing: "ease-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    delay: 0,
                                    listener_type: "timer",
                                  },
                                ],
                                overrides: {
                                  ".oval-BKSJx7": {
                                    height: "16px",
                                    left: "8px",
                                    top: "8px",
                                    width: "16px",
                                  },
                                },
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".oval-4Rn6rX": {
                                        delay: 0,
                                        duration: 400,
                                        easing: "ease-in-out",
                                      },
                                      ".oval-BKSJx7": {
                                        delay: 0,
                                        duration: 400,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state3",
                                    delay: 0,
                                    listener_type: "timer",
                                  },
                                ],
                                overrides: {
                                  ".oval-4Rn6rX": {
                                    height: "18px",
                                    width: "18px",
                                  },
                                  ".oval-BKSJx7": {
                                    left: "1px",
                                    opacity: 0.22,
                                    top: "1px",
                                  },
                                },
                              },
                              state3: {
                                listeners: [
                                  {
                                    animations: {
                                      ".oval-BKSJx7": {
                                        delay: 0,
                                        duration: 0,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state4",
                                    delay: 0,
                                    listener_type: "timer",
                                  },
                                ],
                                overrides: {
                                  ".oval-4Rn6rX": {
                                    left: "8px",
                                    top: "8px",
                                  },
                                  ".oval-BKSJx7": {
                                    height: "34px",
                                    left: "-1px",
                                    opacity: 0,
                                    top: "-1px",
                                    width: "34px",
                                  },
                                },
                              },
                              state4: {
                                listeners: [
                                  {
                                    animations: {
                                      ".oval-BKSJx7": {
                                        delay: 0,
                                        duration: 0,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    delay: 0,
                                    listener_type: "timer",
                                  },
                                ],
                                overrides: {
                                  ".oval-BKSJx7": {
                                    height: "16px",
                                    left: "8px",
                                    opacity: 0,
                                    top: "8px",
                                    width: "16px",
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                      <div class="bubble-hover hidden">
                        <div class="group">
                          <div class="feature-here caveat-regular-normal-rose-21px">Click to play the video</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-row">
                  <div class="title-container">
                    <div class="title lato-normal-black-16px">Skipping jump</div>
                    <p class="subtitle lato-normal-black-12px">Class duration - 18:00 min</p>
                  </div>
                  <div class="emptyhearticon24 component component-wrapper not-ready">
                    <div class="full-heart-icon-wKZAHw">
                      <div class="rectangle-BosxRm"></div>
                      <img
                        class="path-BosxRm"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="path-zx9Yno"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                    <img
                      class="empty-heart-icon-wKZAHw hidden"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon24.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon24",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".empty-heart-icon-wKZAHw": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                  ".full-heart-icon-wKZAHw": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-wKZAHw",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".empty-heart-icon-wKZAHw": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                  ".full-heart-icon-wKZAHw": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-wKZAHw",
                              },
                            ],
                            overrides: {
                              ".empty-heart-icon-wKZAHw": {
                                opacity: 1,
                              },
                              ".full-heart-icon-wKZAHw": {
                                opacity: 0,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--CA1A53CC-FB49-457B-AE54-9D87423C2E74@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container-1">
                        <div class="title-1 lato-normal-black-16px">Dance party workout</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 20:00 min</p>
                      </div>
                      <div class="emptyhearticon20 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-FappgY"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-FappgY hidden">
                          <div class="rectangle-vi0GaJ"></div>
                          <img
                            class="shape-vi0GaJ"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-js3Cdh"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon20.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon20",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-FappgY": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-FappgY",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-FappgY": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-FappgY",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-FappgY": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--28530700-E56D-4FFE-A4F5-ABB7559D3B3B@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container">
                        <div class="title-2 lato-normal-black-16px">Keep on strength</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 22:00 min</p>
                      </div>
                      <div class="emptyhearticon16 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-zTKWir"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-zTKWir hidden">
                          <div class="rectangle-G5KBEK"></div>
                          <img
                            class="shape-G5KBEK"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-7uxetu"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon16.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon16",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-zTKWir": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-zTKWir",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-zTKWir": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-zTKWir",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-zTKWir": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
            </div>
            <div class="class-card-container">
              <div class="class-card-2">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--24FE9136-9D2F-4DBD-B609-FFB786B586A1@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container-2">
                        <div class="title-3 lato-normal-black-16px">Yoga with Cherry</div>
                        <p class="subtitle lato-normal-black-12px">Class duration -&nbsp;&nbsp;20:22 min</p>
                      </div>
                      <div class="emptyhearticon23 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-G6Mw2A"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-G6Mw2A hidden">
                          <div class="rectangle-KFFI9C"></div>
                          <img
                            class="shape-KFFI9C"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-A1f9I4"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon23.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon23",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-G6Mw2A": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-G6Mw2A",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-G6Mw2A": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-G6Mw2A",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-G6Mw2A": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--CAA98F6B-2DF4-4004-8080-C9E1D201561B@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container-3">
                        <div class="title-4 lato-normal-black-16px">Hips and thighs Tabata</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 19:00 min</p>
                      </div>
                      <div class="emptyhearticon19 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-AY4SbZ"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-AY4SbZ hidden">
                          <div class="rectangle-s2mlAM"></div>
                          <img
                            class="shape-s2mlAM"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-GcVpgd"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon19.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon19",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-AY4SbZ": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-AY4SbZ",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-AY4SbZ": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-AY4SbZ",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-AY4SbZ": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--C1F09584-A6B8-4CC1-91D2-33A010BDB880@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container">
                        <div class="title-5 lato-normal-black-16px">Side body flow</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 22:40 min</p>
                      </div>
                      <div class="emptyhearticon15 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-A33PhM"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-A33PhM hidden">
                          <div class="rectangle-mSB38H"></div>
                          <img
                            class="shape-mSB38H"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-WT2MQS"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon15.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon15",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-A33PhM": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-A33PhM",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-A33PhM": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-A33PhM",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-A33PhM": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
            </div>
            <div class="class-card-container-1">
              <div class="class-card-2">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--A88E6268-19DA-4D7E-A883-A51F92907464@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container">
                        <div class="title-6 lato-normal-black-16px">Burning Abs</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 18:57 min</p>
                      </div>
                      <div class="emptyhearticon22 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-IstY43"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-IstY43 hidden">
                          <div class="rectangle-xiRm0t"></div>
                          <img
                            class="shape-xiRm0t"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-UV18Zx"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon22.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon22",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-IstY43": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-IstY43",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-IstY43": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-IstY43",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-IstY43": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--23DE0B49-AB4A-4584-86EF-8C1A0849062F@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container-4">
                        <div class="title-7 lato-normal-black-16px">Intermediate Pilates flow</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 17:50 min</p>
                      </div>
                      <div class="emptyhearticon18 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-vjmMdo"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-vjmMdo hidden">
                          <div class="rectangle-UwpUxS"></div>
                          <img
                            class="shape-UwpUxS"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-SUI7gx"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon18.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon18",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-vjmMdo": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-vjmMdo",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-vjmMdo": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-vjmMdo",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-vjmMdo": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--9EF3A698-AF4C-4DAF-B926-C4E074A1B35F@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container-5">
                        <div class="title-8 lato-normal-black-16px">Weight-lifting practice</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 19:00 min</p>
                      </div>
                      <div class="emptyhearticon14 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-eX9xdT"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-eX9xdT hidden">
                          <div class="rectangle-4EAoKj"></div>
                          <img
                            class="shape-4EAoKj"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-VODyxG"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon14.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon14",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-eX9xdT": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-eX9xdT",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-eX9xdT": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-eX9xdT",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-eX9xdT": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
            </div>
            <div class="class-card-container">
              <div class="class-card-2">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--E2A95010-77A8-45B7-BC9B-CF0F2D5A6559@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container-6">
                        <div class="title-9 lato-normal-black-16px">Good morning stretches</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 19:22 min</p>
                      </div>
                      <div class="emptyhearticon21 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-YmqIdC"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-YmqIdC hidden">
                          <div class="rectangle-k3zozW"></div>
                          <img
                            class="shape-k3zozW"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-7UFmxj"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon21.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon21",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-YmqIdC": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-YmqIdC",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-YmqIdC": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-YmqIdC",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-YmqIdC": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--8EC74D43-94CE-481B-AC70-8CB3053F8CF0@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container">
                        <div class="title-10 lato-normal-black-16px">Functional training</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 20:22 min</p>
                      </div>
                      <div class="emptyhearticon17 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-lIc1KL"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-lIc1KL hidden">
                          <div class="rectangle-7BOAvo"></div>
                          <img
                            class="shape-7BOAvo"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-ZgyN5M"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon17.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon17",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-lIc1KL": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-lIc1KL",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-lIc1KL": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-lIc1KL",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-lIc1KL": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
              <div class="class-card">
                <div class="class-container">
                  <div class="class-card-1">
                    <img
                      class="class-picture"
                      src="img/desktop-1280---classes--class-picture--04AE8868-73C3-42D9-A711-E7ECDD0CEA18@2x.png"
                    />
                    <div class="flex-row">
                      <div class="title-container">
                        <div class="title-11 lato-normal-black-16px">Aerobic exercises</div>
                        <p class="subtitle lato-normal-black-12px">Class duration - 21:00 min</p>
                      </div>
                      <div class="emptyhearticon13 component component-wrapper not-ready">
                        <img
                          class="empty-heart-icon-nOjKMz"
                          src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                        />
                        <div class="full-heart-icon-nOjKMz hidden">
                          <div class="rectangle-IQTD6b"></div>
                          <img
                            class="shape-IQTD6b"
                            src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                          />
                          <img
                            class="shape-6By9K1"
                            src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                          />
                        </div>
                      </div>
                      <script defer>
                        document.querySelector(".emptyhearticon13.component-wrapper").timeline_data = [
                          {
                            initial_state_name: "state1",
                            root_element: ".emptyhearticon13",
                            states_flow: {
                              state1: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-nOjKMz": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state2",
                                    listener_type: "click",
                                    target_selector: ".empty-heart-icon-nOjKMz",
                                  },
                                ],
                                overrides: {},
                              },
                              state2: {
                                listeners: [
                                  {
                                    animations: {
                                      ".full-heart-icon-nOjKMz": {
                                        delay: 0,
                                        duration: 200,
                                        easing: "ease-in-out",
                                      },
                                    },
                                    change_to_state: "state1",
                                    listener_type: "click",
                                    target_selector: ".full-heart-icon-nOjKMz",
                                  },
                                ],
                                overrides: {
                                  ".full-heart-icon-nOjKMz": {
                                    opacity: 1,
                                  },
                                },
                              },
                            },
                          },
                        ];
                      </script>
                    </div>
                  </div>
                  <img
                    class="select-class-hover hidden"
                    src="img/desktop-1280---classes--select-class-hover-4971490F-1B48-437F-A405-C499A80C6260@2x.png"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="tour-bubble-right-1">
            <div class="overlap-group13">
              <div class="pulsingdot2 component component-wrapper not-ready">
                <img
                  class="oval-773FNe"
                  src="img/desktop-1280---dashboard--oval-9151214D-71FA-42DB-AFE1-2CF04E8799E3@4x.png"
                />
                <img
                  class="oval-rK1WwK"
                  src="img/profile-menu-desktop-oval-C2B00AB9-CE8C-4F22-9E89-325F993C036C@4x.png"
                />
              </div>
              <script defer>
                document.querySelector(".pulsingdot2.component-wrapper").timeline_data = [
                  {
                    initial_state_name: "state1",
                    root_element: ".pulsingdot2",
                    states_flow: {
                      state1: {
                        listeners: [
                          {
                            animations: {
                              ".oval-773FNe": {
                                delay: 0,
                                duration: 1000,
                                easing: "ease-out",
                              },
                              ".oval-rK1WwK": {
                                delay: 0,
                                duration: 1000,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state2",
                            delay: 0,
                            listener_type: "timer",
                          },
                        ],
                        overrides: {
                          ".oval-773FNe": {
                            height: "16px",
                            left: "8px",
                            top: "8px",
                            width: "16px",
                          },
                        },
                      },
                      state2: {
                        listeners: [
                          {
                            animations: {
                              ".oval-773FNe": {
                                delay: 0,
                                duration: 400,
                                easing: "ease-in-out",
                              },
                              ".oval-rK1WwK": {
                                delay: 0,
                                duration: 400,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state3",
                            delay: 0,
                            listener_type: "timer",
                          },
                        ],
                        overrides: {
                          ".oval-773FNe": {
                            left: "1px",
                            opacity: 0.22,
                            top: "1px",
                          },
                          ".oval-rK1WwK": {
                            height: "18px",
                            width: "18px",
                          },
                        },
                      },
                      state3: {
                        listeners: [
                          {
                            animations: {
                              ".oval-773FNe": {
                                delay: 0,
                                duration: 0,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state4",
                            delay: 0,
                            listener_type: "timer",
                          },
                        ],
                        overrides: {
                          ".oval-773FNe": {
                            height: "34px",
                            left: "-1px",
                            opacity: 0,
                            top: "-1px",
                            width: "34px",
                          },
                          ".oval-rK1WwK": {
                            left: "8px",
                            top: "8px",
                          },
                        },
                      },
                      state4: {
                        listeners: [
                          {
                            animations: {
                              ".oval-773FNe": {
                                delay: 0,
                                duration: 0,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state1",
                            delay: 0,
                            listener_type: "timer",
                          },
                        ],
                        overrides: {
                          ".oval-773FNe": {
                            height: "16px",
                            left: "8px",
                            opacity: 0,
                            top: "8px",
                            width: "16px",
                          },
                        },
                      },
                    },
                  },
                ];
              </script>
              <div class="bubble-hover-1 hidden">
                <div class="group-1"><div class="feature-here caveat-regular-normal-rose-21px">&lt;3</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-center-horizontal">
      <div class="tablet768classes screen">
        <div class="top-bar-tablet">
          <a href="javascript:ShowOverlay('sidebarmenutablet', 'animate-appear');" class="align-self-flex-end"
            ><img
              class="menu-icon-1"
              src="img/tablet-768---classes-menu-icon-8262B1C1-A5D2-48BC-8A29-47CF0E0F24EF.png"
            /> </a
          ><img
            class="search-icon-2"
            src="img/tablet-768---classes-search-icon-45BCFD22-41C8-47E3-89B9-0DBBFCC4A16B.png"
          />
          <div class="group-3">
            <input
              class="text-search-2 lato-normal-black-12px-2"
              name="textsearch"
              placeholder="Search"
              type="text"
              required
            />
          </div>
          <a href="javascript:ShowOverlay('profilemenutablet', 'animate-appear');"
            ><img
              class="avatar-2"
              src="img/desktop-1280---classes--avatar-D8D7AF01-399A-4077-BEC6-341A1E24038F@2x.png"
            />
          </a>
        </div>
        <div class="classes-4">
          <div class="class-container-4">
            <div class="classes-5 castoro-regular-normal-black-16px">Classes</div>
            <a href="javascript:ShowOverlay('videocardtablet', 'animate-appear');">
              <div class="class-card-1-big-1">
                <div class="overlap-group11-2">
                  <div class="x-big">
                    <div class="play-button-container-2">
                      <img
                        class="play-button-bg-big-1"
                        src="img/tablet-768---classes-play-button-bg-big-6FBD6780-ED74-411C-8DEE-459B68BD2925.png"
                      />
                      <div class="play-button-icon-4">
                        <div class="play-button-icon-5">
                          <img
                            class="path-6"
                            src="img/desktop-1280---classes--path-609256FB-E4DB-4429-A1B8-41B9FDCD9D4C@2x.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-row-2">
                  <div class="title-container-14">
                    <div class="title-24 lato-normal-black-18px">Skipping jump</div>
                    <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;18:00 min</p>
                  </div>
                  <div class="emptyhearticon36 component component-wrapper not-ready">
                    <div class="full-heart-icon-Mn083L">
                      <div class="rectangle-GPXxWH"></div>
                      <img
                        class="path-GPXxWH"
                        src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                      />
                      <img
                        class="path-GvBm5B"
                        src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                      />
                    </div>
                    <img
                      class="empty-heart-icon-Mn083L hidden"
                      src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                    />
                  </div>
                  <script defer>
                    document.querySelector(".emptyhearticon36.component-wrapper").timeline_data = [
                      {
                        initial_state_name: "state1",
                        root_element: ".emptyhearticon36",
                        states_flow: {
                          state1: {
                            listeners: [
                              {
                                animations: {
                                  ".empty-heart-icon-Mn083L": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                  ".full-heart-icon-Mn083L": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state2",
                                listener_type: "click",
                                target_selector: ".full-heart-icon-Mn083L",
                              },
                            ],
                            overrides: {},
                          },
                          state2: {
                            listeners: [
                              {
                                animations: {
                                  ".empty-heart-icon-Mn083L": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                  ".full-heart-icon-Mn083L": {
                                    delay: 0,
                                    duration: 200,
                                    easing: "ease-in-out",
                                  },
                                },
                                change_to_state: "state1",
                                listener_type: "click",
                                target_selector: ".empty-heart-icon-Mn083L",
                              },
                            ],
                            overrides: {
                              ".empty-heart-icon-Mn083L": {
                                opacity: 1,
                              },
                              ".full-heart-icon-Mn083L": {
                                opacity: 0,
                              },
                            },
                          },
                        },
                      },
                    ];
                  </script>
                </div>
              </div></a
            >
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-12"></div>
                  <div class="flex-row-2">
                    <div class="title-container-14">
                      <div class="title-25 lato-normal-black-18px">Burning Abs</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;18:57 min</p>
                    </div>
                    <div class="emptyhearticon34 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-RtUDaT"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-RtUDaT hidden">
                        <div class="rectangle-NozPCt"></div>
                        <img
                          class="shape-NozPCt"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-qxswbu"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon34.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon34",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-RtUDaT": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-RtUDaT",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-RtUDaT": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-RtUDaT",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-RtUDaT": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-13"></div>
                  <div class="flex-row-2">
                    <div class="title-container-16">
                      <div class="title-26 lato-normal-black-18px">Dance party workout</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;20:00 min</p>
                    </div>
                    <div class="emptyhearticon32 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-YDHf5v"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-YDHf5v hidden">
                        <div class="rectangle-tG5efN"></div>
                        <img
                          class="shape-tG5efN"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-pxmVcE"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon32.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon32",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-YDHf5v": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-YDHf5v",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-YDHf5v": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-YDHf5v",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-YDHf5v": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-14"></div>
                  <div class="flex-row-2">
                    <div class="title-container-17">
                      <div class="title-27 lato-normal-black-18px">Intermediate Pilates flow</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;17:50 min</p>
                    </div>
                    <div class="emptyhearticon29 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-xN9ILt"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-xN9ILt hidden">
                        <div class="rectangle-vv7uL0"></div>
                        <img
                          class="shape-vv7uL0"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-c4449t"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon29.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon29",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-xN9ILt": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-xN9ILt",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-xN9ILt": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-xN9ILt",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-xN9ILt": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-15"></div>
                  <div class="flex-row-2">
                    <div class="title-container-14">
                      <div class="title-28 lato-normal-black-18px">Keep on strength</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;20:00 min</p>
                    </div>
                    <div class="emptyhearticon31 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-pRzX28"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-pRzX28 hidden">
                        <div class="rectangle-l2y0vW"></div>
                        <img
                          class="shape-l2y0vW"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-7os2fX"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon31.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon31",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-pRzX28": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-pRzX28",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-pRzX28": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-pRzX28",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-pRzX28": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-16"></div>
                  <div class="flex-row-2">
                    <div class="title-container-18">
                      <div class="title-29 lato-normal-black-18px">Weight-lifting practice</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;19:00 min</p>
                    </div>
                    <div class="emptyhearticon26 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-0yxcmx"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-0yxcmx hidden">
                        <div class="rectangle-TMDuX5"></div>
                        <img
                          class="shape-TMDuX5"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-vcIylu"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon26.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon26",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-0yxcmx": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-0yxcmx",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-0yxcmx": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-0yxcmx",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-0yxcmx": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
          </div>
          <div class="class-card-container-2">
            <div class="x-big">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-17"></div>
                  <div class="flex-row-2">
                    <div class="title-container-15">
                      <div class="title-30 lato-normal-black-18px">Yoga with Cherry</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration - 20:22 min</p>
                    </div>
                    <div class="emptyhearticon35 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-T2uVKJ"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-T2uVKJ hidden">
                        <div class="rectangle-9VWpye"></div>
                        <img
                          class="shape-9VWpye"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-BodNNj"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon35.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon35",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-T2uVKJ": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-T2uVKJ",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-T2uVKJ": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-T2uVKJ",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-T2uVKJ": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-18"></div>
                  <div class="flex-row-2">
                    <div class="title-container-19">
                      <div class="title-31 lato-normal-black-18px">Good morning stretches</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;19:22 min</p>
                    </div>
                    <div class="emptyhearticon33 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-oTsS7l"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-oTsS7l hidden">
                        <div class="rectangle-o0vc37"></div>
                        <img
                          class="shape-o0vc37"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-bxbo1B"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon33.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon33",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-oTsS7l": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-oTsS7l",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-oTsS7l": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-oTsS7l",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-oTsS7l": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-19"></div>
                  <div class="flex-row-2">
                    <div class="title-container-20">
                      <div class="title-32 lato-normal-black-18px">Hips and thighs Tabata</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;19:00 min</p>
                    </div>
                    <div class="emptyhearticon30 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-amozRx"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-amozRx hidden">
                        <div class="rectangle-doVZzE"></div>
                        <img
                          class="shape-doVZzE"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-1q68sX"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon30.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon30",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-amozRx": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-amozRx",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-amozRx": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-amozRx",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-amozRx": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-20"></div>
                  <div class="flex-row-2">
                    <div class="title-container-15">
                      <div class="title-33 lato-normal-black-18px">Functional training</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration - 20:22 min</p>
                    </div>
                    <div class="emptyhearticon28 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-e9cRWD"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-e9cRWD hidden">
                        <div class="rectangle-bd2uhc"></div>
                        <img
                          class="shape-bd2uhc"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-VuK56m"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon28.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon28",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-e9cRWD": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-e9cRWD",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-e9cRWD": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-e9cRWD",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-e9cRWD": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-21"></div>
                  <div class="flex-row-2">
                    <div class="title-container-14">
                      <div class="title-34 lato-normal-black-18px">Side body flow</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;22:40 min</p>
                    </div>
                    <div class="emptyhearticon27 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-U0RpGi"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-U0RpGi hidden">
                        <div class="rectangle-mUrMYQ"></div>
                        <img
                          class="shape-mUrMYQ"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-Mti495"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon27.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon27",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-U0RpGi": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-U0RpGi",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-U0RpGi": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-U0RpGi",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-U0RpGi": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
            <div class="class-card-5">
              <div class="class-container-3">
                <div class="class-card-6">
                  <div class="class-picture-22"></div>
                  <div class="flex-row-2">
                    <div class="title-container-14">
                      <div class="title-35 lato-normal-black-18px">Aerobic exercises</div>
                      <p class="subtitle-2 lato-normal-black-14px">Class duration -&nbsp;&nbsp;21:00 min</p>
                    </div>
                    <div class="emptyhearticon25 component component-wrapper not-ready">
                      <img
                        class="empty-heart-icon-xt5AKz"
                        src="img/mobile-375---classes-empty-heart-icon--7A93D1C7-FA4E-4FEF-AEEC-27226CBE5E4C.svg"
                      />
                      <div class="full-heart-icon-xt5AKz hidden">
                        <div class="rectangle-gOVZGt"></div>
                        <img
                          class="shape-gOVZGt"
                          src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                        />
                        <img
                          class="shape-ImLqxX"
                          src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                        />
                      </div>
                    </div>
                    <script defer>
                      document.querySelector(".emptyhearticon25.component-wrapper").timeline_data = [
                        {
                          initial_state_name: "state1",
                          root_element: ".emptyhearticon25",
                          states_flow: {
                            state1: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-xt5AKz": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state2",
                                  listener_type: "click",
                                  target_selector: ".empty-heart-icon-xt5AKz",
                                },
                              ],
                              overrides: {},
                            },
                            state2: {
                              listeners: [
                                {
                                  animations: {
                                    ".full-heart-icon-xt5AKz": {
                                      delay: 0,
                                      duration: 200,
                                      easing: "ease-in-out",
                                    },
                                  },
                                  change_to_state: "state1",
                                  listener_type: "click",
                                  target_selector: ".full-heart-icon-xt5AKz",
                                },
                              ],
                              overrides: {
                                ".full-heart-icon-xt5AKz": {
                                  opacity: 1,
                                },
                              },
                            },
                          },
                        },
                      ];
                    </script>
                  </div>
                </div>
                <img
                  class="select-class-hover-2 hidden"
                  src="img/mobile-375---classes-select-class-hover-E84C22BD-DADD-451A-9E49-A4EA22F5901B@2x.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="overlay-profilemenumobile" class="overlay" style="min-height: 2083px">
      <div class="profilemenumobile screen">
        <div class="profile-menu-mobile">
          <a href="javascript:HideOverlay('profilemenumobile', 'animate-disappear');" class="align-self-flex-end"
            ><img class="x-symbol" src="img/profile-menu-mobile-x-symbol-4CAE2AB0-A513-4B00-8C46-5528FD0947CA.svg" />
          </a>
          <div class="flex-row">
            <img
              class="profile-picture"
              src="img/profile-menu-mobile-profile-picture-3474AE3C-6B4F-4D2A-AB0B-4B62F1276CF7.png"
            />
            <div class="title-container">
              <img class="title" src="img/profile-menu-mobile-title-45593E00-8783-468A-A251-C3394C714F74@2x.png" />
              <div class="subtitle lato-normal-aqua-deep-16px">My account</div>
            </div>
          </div>
          <div class="flex-col lato-light-black-18px">
            <img class="path-1" src="img/profile-menu-mobile-path-1-0E3B571D-D893-4C36-BD3F-0316546C059C.png" />
            <div class="flex-col-item">Profile notifications</div>
            <div class="flex-col-item">Messages</div>
            <div class="flex-col-item">Support</div>
            <div class="flex-col-item">Feedback</div>
            <img class="path-2" src="img/profile-menu-mobile-path-1-0E3B571D-D893-4C36-BD3F-0316546C059C.png" />
            <a href="mobile375signup.html"><div class="log-out lato-light-black-18px">Log out</div> </a>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-profilemenumobile";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-profilemenumobile";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("profilemenumobile");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("profilemenumobile", "animate-disappear");
          }
        },
        false
      );
    </script>
    <div id="overlay-sidebarmenumobile" class="overlay" style="min-height: 2083px">
      <div class="sidebarmenumobile screen">
        <div class="side-bar-menu-mobile lato-light-white-18px">
          <a href="javascript:HideOverlay('sidebarmenumobile', 'animate-disappear');"
            ><img
              class="x-symbol"
              src="img/side-bar-menu-tablet-x-symbol-3C56ADCA-BCBC-41B2-812D-10C244A65ACE.svg"
            /> </a
          ><a href="mobile375dashboard.html"><div class="place lato-light-white-18px">Home</div> </a>
          <div class="side-bar-menu-mobile-item">Contacts</div>
          <a href="mobile375classes.html"><div class="classes lato-light-white-18px">Classes</div> </a>
          <div class="side-bar-menu-mobile-item">Calendar</div>
          <div class="side-bar-menu-mobile-item">Settings</div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-sidebarmenumobile";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-sidebarmenumobile";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("sidebarmenumobile");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("sidebarmenumobile", "animate-disappear");
          }
        },
        false
      );
    </script>
    <div id="overlay-videocardmobile" class="overlay" style="min-height: 2083px">
      <div class="container-center-horizontal">
        <div class="videocardmobile screen">
          <div class="video-card-mobile">
            <div class="overlap-group">
              <div class="video">
                <video
                  width="100%"
                  height="100%"
                  src="https://anima-uploads.s3.amazonaws.com/projects/602bd72d5ab477d8e2c77aae/files/trainez-video-3-1-mb.mp4"
                  loop
                  autoplay="autoplay"
                  playsinline
                  muted
                ></video>
              </div>
              <a href="javascript:HideOverlay('videocardmobile', 'animate-disappear');"
                ><img
                  class="x-symbol"
                  src="img/side-bar-menu-tablet-x-symbol-3C56ADCA-BCBC-41B2-812D-10C244A65ACE.svg"
                />
              </a>
            </div>
            <div class="flex-row">
              <div class="title-container">
                <div class="title lato-normal-black-16px">Skipping jump</div>
                <div class="subtitle lato-normal-black-12px">Cardio 18:00</div>
              </div>
              <div class="emptyhearticonvideocard component component-wrapper not-ready">
                <img
                  class="empty-heart-icon-j95c24"
                  src="img/video-card-tablet-empty-heart-icon-415BAFDE-A257-484D-8006-18BB846D3A14.svg"
                />
                <div class="full-heart-icon-j95c24 hidden">
                  <div class="rectangle-QYHatz"></div>
                  <img
                    class="path-QYHatz"
                    src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                  />
                  <img
                    class="path-OetMDI"
                    src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                  />
                </div>
              </div>
              <script defer>
                document.querySelector(".emptyhearticonvideocard.component-wrapper").timeline_data = [
                  {
                    initial_state_name: "state1",
                    root_element: ".emptyhearticonvideocard",
                    states_flow: {
                      state1: {
                        listeners: [
                          {
                            animations: {
                              ".full-heart-icon-j95c24": {
                                delay: 0,
                                duration: 200,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state2",
                            listener_type: "click",
                            target_selector: ".empty-heart-icon-j95c24",
                          },
                        ],
                        overrides: {},
                      },
                      state2: {
                        listeners: [
                          {
                            animations: {
                              ".full-heart-icon-j95c24": {
                                delay: 0,
                                duration: 200,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state1",
                            listener_type: "click",
                            target_selector: ".full-heart-icon-j95c24",
                          },
                        ],
                        overrides: {
                          ".full-heart-icon-j95c24": {
                            opacity: 1,
                          },
                        },
                      },
                    },
                  },
                ];
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-videocardmobile";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-videocardmobile";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("videocardmobile");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("videocardmobile", "animate-disappear");
          }
        },
        false
      );
    </script>
    <div id="overlay-profilemenudesktop" class="overlay" style="min-height: 2083px">
      <div class="container-center-horizontal">
        <div class="profilemenudesktop screen">
          <div class="overlap-group1">
            <a href="javascript:HideOverlay('profilemenudesktop', 'animate-disappear');">
              <div class="rectangle"></div
            ></a>
            <div class="profile-menu">
              <div class="flex-col">
                <img
                  class="menu-profile-picture"
                  src="img/profile-menu-desktop-menu---profile-picture-28297A39-93CA-4164-A29A-0C373FF7C3D6@2x.png"
                />
                <div class="name castoro-regular-normal-black-18px">Andrea Baker</div>
                <div class="title lato-normal-aqua-deep-16px">My account</div>
                <img
                  class="subtitle"
                  src="img/profile-menu-desktop-path-2-0C0E324C-EB52-40F4-918B-B606E1ED5ED0@2x.png"
                />
                <div class="flex-col-item lato-light-black-16px">Profile notifications</div>
                <div class="flex-col-item lato-light-black-16px">Messages</div>
                <div class="flex-col-item lato-light-black-16px">Support</div>
                <div class="flex-col-item lato-light-black-16px">Feedback</div>
                <img class="path-2" src="img/profile-menu-desktop-path-2-0C0E324C-EB52-40F4-918B-B606E1ED5ED0@2x.png" />
              </div>
              <div class="overlap-group">
                <a href="desktop1280signup.html"><div class="log-out lato-light-black-16px">Log out</div> </a>
                <div class="pulsingdot9 component component-wrapper not-ready">
                  <img
                    class="oval-DRIwuM"
                    src="img/desktop-1280---dashboard--oval-9151214D-71FA-42DB-AFE1-2CF04E8799E3@4x.png"
                  />
                  <img
                    class="oval-8dMtHP"
                    src="img/profile-menu-desktop-oval-C2B00AB9-CE8C-4F22-9E89-325F993C036C@4x.png"
                  />
                </div>
                <script defer>
                  document.querySelector(".pulsingdot9.component-wrapper").timeline_data = [
                    {
                      initial_state_name: "state1",
                      root_element: ".pulsingdot9",
                      states_flow: {
                        state1: {
                          listeners: [
                            {
                              animations: {
                                ".oval-8dMtHP": {
                                  delay: 0,
                                  duration: 1000,
                                  easing: "ease-in-out",
                                },
                                ".oval-DRIwuM": {
                                  delay: 0,
                                  duration: 1000,
                                  easing: "ease-out",
                                },
                              },
                              change_to_state: "state2",
                              delay: 0,
                              listener_type: "timer",
                            },
                          ],
                          overrides: {
                            ".oval-DRIwuM": {
                              height: "16px",
                              left: "8px",
                              top: "8px",
                              width: "16px",
                            },
                          },
                        },
                        state2: {
                          listeners: [
                            {
                              animations: {
                                ".oval-8dMtHP": {
                                  delay: 0,
                                  duration: 400,
                                  easing: "ease-in-out",
                                },
                                ".oval-DRIwuM": {
                                  delay: 0,
                                  duration: 400,
                                  easing: "ease-in-out",
                                },
                              },
                              change_to_state: "state3",
                              delay: 0,
                              listener_type: "timer",
                            },
                          ],
                          overrides: {
                            ".oval-8dMtHP": {
                              height: "18px",
                              width: "18px",
                            },
                            ".oval-DRIwuM": {
                              left: "1px",
                              opacity: 0.22,
                              top: "1px",
                            },
                          },
                        },
                        state3: {
                          listeners: [
                            {
                              animations: {
                                ".oval-DRIwuM": {
                                  delay: 0,
                                  duration: 0,
                                  easing: "ease-in-out",
                                },
                              },
                              change_to_state: "state4",
                              delay: 0,
                              listener_type: "timer",
                            },
                          ],
                          overrides: {
                            ".oval-8dMtHP": {
                              left: "8px",
                              top: "8px",
                            },
                            ".oval-DRIwuM": {
                              height: "34px",
                              left: "-1px",
                              opacity: 0,
                              top: "-1px",
                              width: "34px",
                            },
                          },
                        },
                        state4: {
                          listeners: [
                            {
                              animations: {
                                ".oval-DRIwuM": {
                                  delay: 0,
                                  duration: 0,
                                  easing: "ease-in-out",
                                },
                              },
                              change_to_state: "state1",
                              delay: 0,
                              listener_type: "timer",
                            },
                          ],
                          overrides: {
                            ".oval-DRIwuM": {
                              height: "16px",
                              left: "8px",
                              opacity: 0,
                              top: "8px",
                              width: "16px",
                            },
                          },
                        },
                      },
                    },
                  ];
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-profilemenudesktop";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-profilemenudesktop";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("profilemenudesktop");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("profilemenudesktop", "animate-disappear");
          }
        },
        false
      );
    </script>
    <div id="overlay-videocarddesktop" class="overlay" style="min-height: 2083px">
      <div class="container-center-horizontal">
        <div class="videocarddesktop screen">
          <div class="video-card-desktop">
            <div class="overlap-group">
              <div class="video">
                <video
                  width="100%"
                  height="100%"
                  src="https://anima-uploads.s3.amazonaws.com/projects/602bd72d5ab477d8e2c77aae/files/trainez-video-3-1-mb.mp4"
                  loop
                  autoplay="autoplay"
                  playsinline
                  muted
                ></video>
              </div>
              <a href="javascript:HideOverlay('videocarddesktop', 'animate-disappear');"
                ><img class="x-symbol" src="img/video-card-desktop-x-symbol-14430D29-D5F8-4DC2-AFBC-EBCDE260A97D.svg" />
              </a>
            </div>
            <div class="flex-row">
              <div class="title-container">
                <div class="title lato-normal-black-16px">Skipping jump</div>
                <p class="subtitle lato-normal-black-14px">Class duration -&nbsp;&nbsp;18:00 min</p>
              </div>
              <div class="emptyhearticonvideocard3 component component-wrapper not-ready">
                <img
                  class="empty-heart-icon-fejdAS"
                  src="img/video-card-tablet-empty-heart-icon-415BAFDE-A257-484D-8006-18BB846D3A14.svg"
                />
                <div class="full-heart-icon-fejdAS hidden">
                  <div class="rectangle-HGFcx6"></div>
                  <img
                    class="path-HGFcx6"
                    src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                  />
                  <img
                    class="path-Gczwxt"
                    src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                  />
                </div>
              </div>
              <script defer>
                document.querySelector(".emptyhearticonvideocard3.component-wrapper").timeline_data = [
                  {
                    initial_state_name: "state1",
                    root_element: ".emptyhearticonvideocard3",
                    states_flow: {
                      state1: {
                        listeners: [
                          {
                            animations: {
                              ".full-heart-icon-fejdAS": {
                                delay: 0,
                                duration: 200,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state2",
                            listener_type: "click",
                            target_selector: ".empty-heart-icon-fejdAS",
                          },
                        ],
                        overrides: {},
                      },
                      state2: {
                        listeners: [
                          {
                            animations: {
                              ".full-heart-icon-fejdAS": {
                                delay: 0,
                                duration: 200,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state1",
                            listener_type: "click",
                            target_selector: ".full-heart-icon-fejdAS",
                          },
                        ],
                        overrides: {
                          ".full-heart-icon-fejdAS": {
                            opacity: 1,
                          },
                        },
                      },
                    },
                  },
                ];
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-videocarddesktop";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-videocarddesktop";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("videocarddesktop");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("videocarddesktop", "animate-disappear");
          }
        },
        false
      );
    </script>
    <div id="overlay-profilemenutablet" class="overlay" style="min-height: 2083px">
      <div class="container-center-horizontal">
        <div class="profilemenutablet screen">
          <div class="overlap-group">
            <a href="javascript:HideOverlay('profilemenutablet', 'animate-disappear');">
              <div class="rectangle"></div
            ></a>
            <div class="profile-menu-tablet">
              <img
                class="menu-profile-picture"
                src="img/profile-menu-desktop-menu---profile-picture-28297A39-93CA-4164-A29A-0C373FF7C3D6@2x.png"
              />
              <div class="title castoro-regular-normal-black-18px">Andrea Baker</div>
              <div class="subtitle lato-normal-aqua-deep-16px">My account</div>
              <img class="path-1" src="img/profile-menu-desktop-path-2-0C0E324C-EB52-40F4-918B-B606E1ED5ED0@2x.png" />
              <div class="profile-menu-tablet-item lato-light-black-16px">Profile notifications</div>
              <div class="profile-menu-tablet-item lato-light-black-16px">Messages</div>
              <div class="profile-menu-tablet-item lato-light-black-16px">Support</div>
              <div class="profile-menu-tablet-item lato-light-black-16px">Feedback</div>
              <img class="path-2" src="img/profile-menu-desktop-path-2-0C0E324C-EB52-40F4-918B-B606E1ED5ED0@2x.png" />
              <a href="tablet768signup.html"><div class="log-out lato-light-black-16px">Log out</div> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-profilemenutablet";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-profilemenutablet";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("profilemenutablet");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("profilemenutablet", "animate-disappear");
          }
        },
        false
      );
    </script>
    <div id="overlay-sidebarmenutablet" class="overlay" style="min-height: 2083px">
      <div class="container-center-horizontal">
        <div class="sidebarmenutablet screen">
          <div class="overlap-group">
            <a href="javascript:HideOverlay('sidebarmenutablet', 'animate-disappear');">
              <div class="rectangle"></div
            ></a>
            <div class="side-bar-menu-tablet lato-light-white-18px">
              <a href="javascript:HideOverlay('sidebarmenutablet', 'animate-disappear');"
                ><img
                  class="x-symbol"
                  src="img/side-bar-menu-tablet-x-symbol-3C56ADCA-BCBC-41B2-812D-10C244A65ACE.svg"
                /> </a
              ><a href="tablet768dashboard.html"><div class="place lato-light-white-18px">Home</div> </a>
              <div class="side-bar-menu-tablet-item">Contacts</div>
              <a href="tablet768classes.html"><div class="classes lato-light-white-18px">Classes</div> </a>
              <div class="side-bar-menu-tablet-item">Calendar</div>
              <div class="side-bar-menu-tablet-item">Settings</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-sidebarmenutablet";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-sidebarmenutablet";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("sidebarmenutablet");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("sidebarmenutablet", "animate-disappear");
          }
        },
        false
      );
    </script>
    <div id="overlay-videocardtablet" class="overlay" style="min-height: 2083px">
      <div class="container-center-horizontal">
        <div class="videocardtablet screen">
          <div class="video-card">
            <div class="overlap-group">
              <div class="video">
                <video
                  width="100%"
                  height="100%"
                  src="https://anima-uploads.s3.amazonaws.com/projects/602bd72d5ab477d8e2c77aae/files/trainez-video-3-1-mb.mp4"
                  loop
                  autoplay="autoplay"
                  playsinline
                  muted
                ></video>
              </div>
              <div class="rectangle"></div>
              <a href="javascript:HideOverlay('videocardtablet', 'animate-disappear');"
                ><img class="x-symbol" src="img/video-card-tablet-x-symbol-D7CC1339-181E-4880-B19C-4783F79B2F4B.svg" />
              </a>
            </div>
            <div class="flex-row">
              <div class="title-container">
                <div class="title lato-normal-black-16px">Skipping jump</div>
                <p class="subtitle lato-normal-black-14px">Class duration -&nbsp;&nbsp;18:00 min</p>
              </div>
              <div class="emptyhearticonvideocard2 component component-wrapper not-ready">
                <img
                  class="empty-heart-icon-dCmSDp"
                  src="img/video-card-tablet-empty-heart-icon-415BAFDE-A257-484D-8006-18BB846D3A14.svg"
                />
                <div class="full-heart-icon-dCmSDp hidden">
                  <div class="rectangle-iAYf0X"></div>
                  <img
                    class="path-iAYf0X"
                    src="img/desktop-1280---classes--shape-14DB9652-7680-4412-BE6F-6A83683E417F@2x.png"
                  />
                  <img
                    class="path-ODAxCZ"
                    src="img/video-card-desktop-path-1A1FE381-C05B-4D2E-8849-CE65D7430F89@2x.png"
                  />
                </div>
              </div>
              <script defer>
                document.querySelector(".emptyhearticonvideocard2.component-wrapper").timeline_data = [
                  {
                    initial_state_name: "state1",
                    root_element: ".emptyhearticonvideocard2",
                    states_flow: {
                      state1: {
                        listeners: [
                          {
                            animations: {
                              ".full-heart-icon-dCmSDp": {
                                delay: 0,
                                duration: 200,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state2",
                            listener_type: "click",
                            target_selector: ".empty-heart-icon-dCmSDp",
                          },
                        ],
                        overrides: {},
                      },
                      state2: {
                        listeners: [
                          {
                            animations: {
                              ".full-heart-icon-dCmSDp": {
                                delay: 0,
                                duration: 200,
                                easing: "ease-in-out",
                              },
                            },
                            change_to_state: "state1",
                            listener_type: "click",
                            target_selector: ".full-heart-icon-dCmSDp",
                          },
                        ],
                        overrides: {
                          ".full-heart-icon-dCmSDp": {
                            opacity: 1,
                          },
                        },
                      },
                    },
                  },
                ];
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-videocardtablet";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var overlay_id = "overlay-videocardtablet";
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var overlayContainer = overlayElement.getElementsByClassName("videocardtablet");
          var clickedDiv = e.toElement || e.target;
          var dismissButton = clickedDiv.parentElement.id == overlay_id;
          var clickOutsideOverlay = false;
          if (overlayContainer.length > 0) {
            clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
          }
          if (dismissButton || clickOutsideOverlay) {
            HideOverlay("videocardtablet", "animate-disappear");
          }
        },
        false
      );
    </script>
    <script>
      ShowOverlay = function (overlayName, animationName) {
        overlayName = "overlay-" + overlayName;
        var cssClasses = document.getElementById(overlayName).className.split(" ");
        var last = cssClasses.slice(-1)[0];
        if (last.lastIndexOf("animate") == -1) {
          document.getElementById(overlayName).className =
            document.getElementById(overlayName).className + " " + animationName;
        }
        if (window.loadAsyncSrc != undefined) {
          loadAsyncSrc();
        }
      };
      HideOverlay = function (overlayName, animationName) {
        overlayName = "overlay-" + overlayName;
        var cssClasses = document.getElementById(overlayName).className.split(" ");
        var last = cssClasses.slice(-1)[0];
        if (last.lastIndexOf("animate") != -1) {
          cssClasses.splice(-1);
          cssClasses.push(animationName);
          document.getElementById(overlayName).className = cssClasses.join(" ");

          cssClasses.splice(-1);
          setTimeout(function () {
            document.getElementById(overlayName).className = cssClasses.join(" ");
          }, 1100);
        }
        var vids = document.getElementsByTagName("video");
        if (vids) {
          for (var i = 0; i < vids.length; i++) {
            var video = vids.item(i);
            video.pause();
          }
        }
      };
    </script>
    <script>
      "use strict";

      function _toConsumableArray(arr) {
        return (
          _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread()
        );
      }

      function _nonIterableSpread() {
        throw new TypeError(
          "Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
        );
      }

      function _iterableToArray(iter) {
        if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter);
      }

      function _arrayWithoutHoles(arr) {
        if (Array.isArray(arr)) return _arrayLikeToArray(arr);
      }

      function ownKeys(object, enumerableOnly) {
        var keys = Object.keys(object);
        if (Object.getOwnPropertySymbols) {
          var symbols = Object.getOwnPropertySymbols(object);
          if (enumerableOnly)
            symbols = symbols.filter(function (sym) {
              return Object.getOwnPropertyDescriptor(object, sym).enumerable;
            });
          keys.push.apply(keys, symbols);
        }
        return keys;
      }

      function _objectSpread(target) {
        for (var i = 1; i < arguments.length; i++) {
          var source = arguments[i] != null ? arguments[i] : {};
          if (i % 2) {
            ownKeys(Object(source), true).forEach(function (key) {
              _defineProperty(target, key, source[key]);
            });
          } else if (Object.getOwnPropertyDescriptors) {
            Object.defineProperties(target, Object.getOwnPropertyDescriptors(source));
          } else {
            ownKeys(Object(source)).forEach(function (key) {
              Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key));
            });
          }
        }
        return target;
      }

      function _defineProperty(obj, key, value) {
        if (key in obj) {
          Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });
        } else {
          obj[key] = value;
        }
        return obj;
      }

      function _createForOfIteratorHelper(o, allowArrayLike) {
        var it;
        if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) {
          if (
            Array.isArray(o) ||
            (it = _unsupportedIterableToArray(o)) ||
            (allowArrayLike && o && typeof o.length === "number")
          ) {
            if (it) o = it;
            var i = 0;
            var F = function F() {};
            return {
              s: F,
              n: function n() {
                if (i >= o.length) return { done: true };
                return { done: false, value: o[i++] };
              },
              e: function e(_e2) {
                throw _e2;
              },
              f: F,
            };
          }
          throw new TypeError(
            "Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
          );
        }
        var normalCompletion = true,
          didErr = false,
          err;
        return {
          s: function s() {
            it = o[Symbol.iterator]();
          },
          n: function n() {
            var step = it.next();
            normalCompletion = step.done;
            return step;
          },
          e: function e(_e3) {
            didErr = true;
            err = _e3;
          },
          f: function f() {
            try {
              if (!normalCompletion && it["return"] != null) it["return"]();
            } finally {
              if (didErr) throw err;
            }
          },
        };
      }

      function _slicedToArray(arr, i) {
        return (
          _arrayWithHoles(arr) ||
          _iterableToArrayLimit(arr, i) ||
          _unsupportedIterableToArray(arr, i) ||
          _nonIterableRest()
        );
      }

      function _nonIterableRest() {
        throw new TypeError(
          "Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
        );
      }

      function _unsupportedIterableToArray(o, minLen) {
        if (!o) return;
        if (typeof o === "string") return _arrayLikeToArray(o, minLen);
        var n = Object.prototype.toString.call(o).slice(8, -1);
        if (n === "Object" && o.constructor) n = o.constructor.name;
        if (n === "Map" || n === "Set") return Array.from(o);
        if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))
          return _arrayLikeToArray(o, minLen);
      }

      function _arrayLikeToArray(arr, len) {
        if (len == null || len > arr.length) len = arr.length;
        for (var i = 0, arr2 = new Array(len); i < len; i++) {
          arr2[i] = arr[i];
        }
        return arr2;
      }

      function _iterableToArrayLimit(arr, i) {
        if (typeof Symbol === "undefined" || !(Symbol.iterator in Object(arr))) return;
        var _arr = [];
        var _n = true;
        var _d = false;
        var _e = undefined;
        try {
          for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) {
            _arr.push(_s.value);
            if (i && _arr.length === i) break;
          }
        } catch (err) {
          _d = true;
          _e = err;
        } finally {
          try {
            if (!_n && _i["return"] != null) _i["return"]();
          } finally {
            if (_d) throw _e;
          }
        }
        return _arr;
      }

      function _arrayWithHoles(arr) {
        if (Array.isArray(arr)) return arr;
      }

      (function () {
        var sides_opposites = {
          left: "right",
          right: "left",
          top: "bottom",
          bottom: "top",
        };
        var sides_containers = {
          left: "width",
          right: "width",
          top: "height",
          bottom: "height",
        };
        var containers = ["height", "width"];
        var autoanimated_properties = [
          "left",
          "right",
          "top",
          "bottom",
          "width",
          "height",
          "background-color",
          "color",
          "font-size",
          "line-height",
          "letter-spacing",
          "border",
          "border-size",
          "border-color",
          "margin",
          "margin-right",
          "margin-left",
          "margin-top",
          "margin-bottom",
          "opacity",
          "font-family",
          "transform",
          "rotate",
        ];
        var autoanimated_properties_from_zero = ["opacity", "rotate"];
        var last_set_hash = "";

        function normalize_to_percent_and_offset(value) {
          var percent = 0.0;
          var pixel_offset = 0;
          var calc_match = value.match(/calc\(\s*([0-9.]*)%\s*([-+])\s*([0-9]*)px/);

          if (calc_match) {
            percent = parseFloat(calc_match[1]);
            pixel_offset = parseInt(calc_match[3]);

            if (calc_match[2] === "-") {
              pixel_offset = -pixel_offset;
            }
          } else if (String(value).includes("%")) {
            percent = parseFloat(value.replace("%", ""));
          } else {
            pixel_offset = parseInt(value, 10);
          }

          return {
            percent: percent,
            pixel_offset: pixel_offset,
          };
        }

        function to_relative_percent(element, property, value) {
          var offsetParent = element.offsetParent;

          if (!offsetParent) {
            return 0;
          }

          var target_style_property = property;

          if (sides_containers.hasOwnProperty(property)) {
            target_style_property = sides_containers[property];
          }

          var parent_size = Math.max(1, parseInt(getComputedStyle(offsetParent)[target_style_property], 10));
          return parseFloat((100 * value) / parent_size);
        }

        function convert_to_matching_positioning(element, new_props) {
          var computed_element_style = getComputedStyle(element);
          Object.entries(new_props).forEach(function (_ref) {
            var _ref2 = _slicedToArray(_ref, 2),
              property = _ref2[0],
              value = _ref2[1];

            if (sides_opposites.hasOwnProperty(property)) {
              var to_percent = String(value).includes("%");
              var new_prop_value =
                parseInt(computed_element_style[property], 10) +
                parseInt(computed_element_style["margin-" + property], 10);

              if (to_percent) {
                new_prop_value = to_relative_percent(element, property, new_prop_value).toFixed(4) + "%";
              } else {
                new_prop_value += "px";
              }

              element.style[property] = new_prop_value;
              element.style["margin-" + property] = 0;
              element.style["margin-" + sides_opposites[property]] = 0;

              if (element.style[sides_opposites[property]]) {
                element.style[sides_opposites[property]] = "auto";
              }
            } else if (containers.includes(property)) {
              var _to_percent = String(value).includes("%");

              var _new_prop_value = parseInt(computed_element_style[property]);

              if (_to_percent) {
                _new_prop_value = to_relative_percent(element, property, _new_prop_value).toFixed(4) + "%";
              } else {
                _new_prop_value += "px";
              }

              element.style[property] = _new_prop_value;
            }
          });
        }

        function setup_listener(root_element, listener_specs, event_handler) {
          var cleaner = null;

          if (listener_specs.listener_type === "timer") {
            var timeout = setTimeout(event_handler, listener_specs.delay);

            cleaner = function cleaner() {
              return clearTimeout(timeout);
            };
          } else if (["click", "mouseenter", "mouseleave"].includes(listener_specs.listener_type)) {
            var target_element =
              listener_specs.target_selector === ""
                ? root_element
                : root_element.querySelector(listener_specs.target_selector);

            if (!target_element) {
              return function () {};
            }

            var event_handler_fixed = function event_handler_fixed(event) {
              if (event.type === "click" || event.target === target_element) {
                event.stopPropagation();
                event_handler();
              }
            };

            target_element.classList.add("listeners-active");

            if (listener_specs.listener_type === "click") {
              target_element.classList.add("listeners-active-click");
            }

            target_element.addEventListener(listener_specs.listener_type, event_handler_fixed, true);

            cleaner = function cleaner() {
              target_element.removeEventListener(listener_specs.listener_type, event_handler_fixed, true);
              target_element.classList.remove("listeners-active");
              target_element.classList.remove("listeners-active-click");
            };
          }

          return cleaner;
        }

        function animate_elements(root_element, selector_to_properties_map, transition_props, on_done) {
          var from_current_position = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : true;
          var hide_low_opacity = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : true;
          var entries = selector_to_properties_map.entries
            ? selector_to_properties_map.entries()
            : Object.entries(selector_to_properties_map);

          var _iterator = _createForOfIteratorHelper(entries),
            _step;

          try {
            var _loop = function _loop() {
              var _step$value = _slicedToArray(_step.value, 2),
                selector_or_element = _step$value[0],
                prop_values_map = _step$value[1];

              var element = root_element;

              if (typeof selector_or_element === "string") {
                if (selector_or_element !== "") {
                  element = root_element.querySelector(selector_or_element);
                }
              } else {
                element = selector_or_element;
              }

              if (element) {
                var update_element_visibility = function update_element_visibility(visible) {
                  if (visible) {
                    element.classList.toggle("hidden", false);
                  } else {
                    element.classList.toggle("hidden", true);
                  }
                };

                if (hide_low_opacity) {
                  update_element_visibility(
                    prop_values_map["opacity"] > 0 || getComputedStyle(element).opacity > 0.001
                  );
                }

                anime.remove(element);

                var full_params = _objectSpread(
                  _objectSpread(_objectSpread({}, transition_props), prop_values_map),
                  {},
                  {
                    targets: [element],
                    complete: function complete() {
                      if (hide_low_opacity) {
                        update_element_visibility(getComputedStyle(element).opacity > 0.001);
                      }

                      if (on_done) {
                        on_done(element);
                      }
                    },
                  }
                );

                if (prop_values_map.hasOwnProperty("transform")) {
                  var transform_val = full_params.transform;
                  delete full_params.transform;

                  if (!Array.isArray(transform_val)) {
                    transform_val
                      .match(/\S*\([^)]*/g)
                      .map(function (x) {
                        return x.split("(");
                      })
                      .forEach(function (_ref3) {
                        var _ref4 = _slicedToArray(_ref3, 2),
                          key = _ref4[0],
                          val = _ref4[1];

                        full_params[key] = val;
                      });
                  }
                }

                if (full_params.hasOwnProperty("easing")) {
                  var mapping = {
                    "": "linear",
                    none: "linear",
                    bounce: "easeOutBounce",
                    "wind-up": "cubicBezier(0.4, -0.25, 0.8, 0.8)",
                    snap: "cubicBezier(0.8, 0.85, 0.7, 1.15)",
                    "ease-in-out": "cubicBezier(0.42, 0, 0.58, 1)",
                    "ease-in": "cubicBezier(0.42, 0, 1, 1)",
                    "ease-out": "cubicBezier(0, 0, 0.58, 1)",
                  };
                  var easing = full_params["easing"].trim().toLowerCase();

                  if (mapping.hasOwnProperty(easing)) {
                    easing = mapping[easing];
                  } else if (easing.startsWith("cubic-bezier")) {
                    easing = easing.replace("cubic-bezier", "cubicBezier");
                  }

                  full_params["easing"] = easing;
                }

                if (from_current_position) {
                  convert_to_matching_positioning(element, full_params);
                  Object.keys(sides_opposites).forEach(function (side) {
                    if (full_params.hasOwnProperty(side)) {
                      var value = full_params[side];

                      var _normalize_to_percent = normalize_to_percent_and_offset(value),
                        percent = _normalize_to_percent.percent,
                        pixel_offset = _normalize_to_percent.pixel_offset;

                      if (Math.abs(percent) < 0.001) {
                        full_params[side] = pixel_offset + "px";
                      } else {
                        full_params[side] = percent + "%";
                        full_params["margin-" + side] = pixel_offset + "px";
                      }

                      element.style[sides_opposites[side]] = "auto";
                    }
                  });
                  containers.forEach(function (container) {
                    if (full_params.hasOwnProperty(container)) {
                      var value = full_params[container];

                      var _normalize_to_percent2 = normalize_to_percent_and_offset(value),
                        percent = _normalize_to_percent2.percent,
                        pixel_offset = _normalize_to_percent2.pixel_offset;

                      if (Math.abs(percent) < 0.001) {
                        full_params[container] = pixel_offset + "px";
                      } else {
                        if (Math.abs(pixel_offset) > 0) {
                          percent += to_relative_percent(element, container, pixel_offset);
                          percent = Math.max(0, percent);
                        }

                        full_params[container] = percent + "%";
                      }
                    }
                  });
                }

                anime(full_params);
              }
            };

            for (_iterator.s(); !(_step = _iterator.n()).done; ) {
              _loop();
            }
          } catch (err) {
            _iterator.e(err);
          } finally {
            _iterator.f();
          }
        }

        function timeline_get_changed_properties_between_states(
          initial_element_state,
          from_state_element_state,
          to_state_element_state
        ) {
          var selector_to_props = {};
          Object.entries(from_state_element_state).forEach(function (_ref5) {
            var _ref6 = _slicedToArray(_ref5, 2),
              selector = _ref6[0],
              properties = _ref6[1];

            selector_to_props[selector] = selector_to_props[selector] || {};
            Object.entries(properties).forEach(function (_ref7) {
              var _ref8 = _slicedToArray(_ref7, 2),
                property = _ref8[0],
                value = _ref8[1];

              selector_to_props[selector][property] = initial_element_state[selector][property];
            });
          });
          Object.entries(to_state_element_state).forEach(function (_ref9) {
            var _ref10 = _slicedToArray(_ref9, 2),
              selector = _ref10[0],
              properties = _ref10[1];

            selector_to_props[selector] = selector_to_props[selector] || {};
            Object.entries(properties).forEach(function (_ref11) {
              var _ref12 = _slicedToArray(_ref11, 2),
                property = _ref12[0],
                value = _ref12[1];

              selector_to_props[selector][property] = value;
            });
          });
          return selector_to_props;
        }

        function timeline_transitioning_to_state(
          root_element,
          initial_properties,
          states_flow,
          now_state_name,
          transition_animation_time
        ) {
          var new_state_flow = states_flow[now_state_name];
          var listener_cleanup_callbacks = [];

          var _iterator2 = _createForOfIteratorHelper(new_state_flow.listeners),
            _step2;

          try {
            var _loop2 = function _loop2() {
              var listener_specs = _step2.value;

              function on_listener_run() {
                listener_cleanup_callbacks.forEach(function (callback) {
                  return callback();
                });
                listener_cleanup_callbacks = [];
                var next_state_name = listener_specs.change_to_state;
                var this_state_element_state = states_flow[now_state_name].overrides;
                var next_state_element_state = states_flow[next_state_name].overrides;
                var element_selector_to_changed_properties = timeline_get_changed_properties_between_states(
                  initial_properties,
                  this_state_element_state,
                  next_state_element_state
                );
                var longest_animation_time_ms = 0;
                Object.entries(listener_specs.animations).forEach(function (_ref13) {
                  var _ref14 = _slicedToArray(_ref13, 2),
                    selector = _ref14[0],
                    animation_specs = _ref14[1];

                  var filtered_props = {};

                  if (element_selector_to_changed_properties.hasOwnProperty(selector)) {
                    filtered_props[selector] = element_selector_to_changed_properties[selector];
                    longest_animation_time_ms = Math.max(
                      longest_animation_time_ms,
                      animation_specs.delay + animation_specs.duration
                    );
                    animate_elements(root_element, filtered_props, animation_specs);
                  }
                });
                timeline_transitioning_to_state(
                  root_element,
                  initial_properties,
                  states_flow,
                  next_state_name,
                  longest_animation_time_ms
                );
              }

              var final_listener_specs = _objectSpread({}, listener_specs);

              if (listener_specs.listener_type === "timer") {
                final_listener_specs.delay += transition_animation_time;
              }

              var cleanup_callback = setup_listener(root_element, final_listener_specs, on_listener_run);
              listener_cleanup_callbacks.push(cleanup_callback);
            };

            for (_iterator2.s(); !(_step2 = _iterator2.n()).done; ) {
              _loop2();
            }
          } catch (err) {
            _iterator2.e(err);
          } finally {
            _iterator2.f();
          }
        }

        function run_when_doc_ready(fn) {
          if (!document.getElementById("anime-js-script")) {
            var animejs_element = document.createElement("script");
            animejs_element.id = "anime-js-script";
            animejs_element.setAttribute("src", "https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js");
            animejs_element.setAttribute("integrity", "sha256-98Q574VkbV+PkxXCKSgL6jVq9mrVbS7uCdA+vt0sLS8=");
            animejs_element.setAttribute("crossorigin", "anonymous");
            document.head.appendChild(animejs_element);
          }

          if (!document.getElementById("imgloaded-js-script")) {
            var imgloaded_element = document.createElement("script");
            imgloaded_element.id = "imgloaded-js-script";
            imgloaded_element.setAttribute("src", "https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js");
            document.head.appendChild(imgloaded_element);
          }

          if (window.anime === undefined || window.imagesLoaded === undefined) {
            setTimeout(function () {
              return run_when_doc_ready(fn);
            }, 50);
            return;
          }

          if (document.readyState === "complete" || document.readyState === "interactive") {
            setTimeout(fn, 1);
          } else {
            document.addEventListener("DOMContentLoaded", fn);
          }
        }

        function timeline_load_initial_values(components) {
          components.forEach(function (component) {
            var root_element = document.querySelector(component.root_element);
            var states_flow = component.states_flow;
            var initial_state_name = component.initial_state_name;
            var initial_properties = {};
            Object.values(component.states_flow).forEach(function (state_spec) {
              Object.entries(state_spec.overrides).forEach(function (_ref15) {
                var _ref16 = _slicedToArray(_ref15, 2),
                  selector = _ref16[0],
                  properties = _ref16[1];

                initial_properties[selector] = initial_properties[selector] || {};
                var element = selector === "" ? root_element : root_element.querySelector(selector);
                Object.keys(properties).forEach(function (property) {
                  initial_properties[selector][property] =
                    element.style[property] ||
                    (property === "transform" && "rotate(0deg)") ||
                    window.getComputedStyle(element)[property];
                });
              });
            });
            Object.entries(component.states_flow[initial_state_name].overrides).forEach(function (_ref17) {
              var _ref18 = _slicedToArray(_ref17, 2),
                selector = _ref18[0],
                properties = _ref18[1];

              var element = selector === "" ? root_element : root_element.querySelector(selector);
              animate_elements(
                element,
                {
                  "": properties,
                },
                {
                  duration: 0,
                }
              );
            });
            timeline_transitioning_to_state(root_element, initial_properties, states_flow, initial_state_name, 0);
          });
          document.querySelectorAll(".not-ready").forEach(function (x) {
            return x.classList.remove("not-ready");
          });
        }

        function autoanim_get_current_view() {
          var hash = window.location.hash && window.location.hash.slice(1);
          var screen_element = document.querySelector(".screen");
          var screens_slugs = screen_element.getAttribute("data-screens").split(",");
          var page = screen_element.getAttribute("data-page");

          if (screens_slugs.indexOf(hash) !== -1) {
            return [page, hash];
          }

          var _iterator3 = _createForOfIteratorHelper(screens_slugs),
            _step3;

          try {
            for (_iterator3.s(); !(_step3 = _iterator3.n()).done; ) {
              var slug = _step3.value;

              if (screen_element.classList.contains(slug)) {
                return [page, slug];
              }
            }
          } catch (err) {
            _iterator3.e(err);
          } finally {
            _iterator3.f();
          }

          return [page, page];
        }

        function autoanim_redirect(specs, event) {
          var actions = specs.split(";");

          var _autoanim_get_current = autoanim_get_current_view(),
            _autoanim_get_current2 = _slicedToArray(_autoanim_get_current, 2),
            page = _autoanim_get_current2[0],
            current_screen = _autoanim_get_current2[1];

          var _iterator4 = _createForOfIteratorHelper(actions),
            _step4;

          try {
            for (_iterator4.s(); !(_step4 = _iterator4.n()).done; ) {
              var action = _step4.value;

              var _action$split = action.split(","),
                _action$split2 = _slicedToArray(_action$split, 5),
                from_screen = _action$split2[0],
                target_url = _action$split2[1],
                link_target_attribute = _action$split2[2],
                easing = _action$split2[3],
                duration = _action$split2[4];

              from_screen = decodeURIComponent(from_screen);
              target_url = decodeURIComponent(target_url);
              duration = parseInt(duration, 10);

              if (from_screen === "*" || from_screen === current_screen) {
                var js_run = target_url.match(/\s*javascript\:(.*)/);

                if (js_run) {
                  eval(js_run[1]);
                  event.stopPropagation();
                  return false;
                } else if (target_url.indexOf(page + "#") === 0) {
                  autoanim_change_to_screen(current_screen, target_url.split("#")[1], easing, duration);
                  event.stopPropagation();
                  return false;
                } else {
                  window.open(target_url, link_target_attribute);
                  event.stopPropagation();
                  return false;
                }
              }
            }
          } catch (err) {
            _iterator4.e(err);
          } finally {
            _iterator4.f();
          }

          return false;
        }

        function autoanim_reorder_by_z_indexes() {
          var parents_contained_z_values = new Map();
          var children_z = new Map();

          var _iterator5 = _createForOfIteratorHelper(document.querySelectorAll(".screen[data-screens] *")),
            _step5;

          try {
            for (_iterator5.s(); !(_step5 = _iterator5.n()).done; ) {
              var element = _step5.value;
              var computed_style = getComputedStyle(element);

              if (["br", "#text", "#comment", "svg"].includes(element.nodeName && element.nodeName.toLowerCase())) {
                continue;
              }

              var z = parseInt(computed_style.getPropertyValue("--z-index"));

              if (z !== -1) {
                if (!parents_contained_z_values.has(element.parentNode)) {
                  parents_contained_z_values.set(element.parentNode, {});
                }

                var parent_z_values = parents_contained_z_values.get(element.parentNode);
                parent_z_values[z] = true;
                children_z.set(element, z);
              }
            }
          } catch (err) {
            _iterator5.e(err);
          } finally {
            _iterator5.f();
          }

          var _iterator6 = _createForOfIteratorHelper(parents_contained_z_values.entries()),
            _step6;

          try {
            for (_iterator6.s(); !(_step6 = _iterator6.n()).done; ) {
              var comparator = function comparator(a, b) {
                var a_z = children_z.has(a) ? parseInt(children_z.get(a)) : -1;
                var b_z = children_z.has(b) ? parseInt(children_z.get(b)) : -1;

                if (a_z > b_z) {
                  return 1;
                } else if (a_z < b_z) {
                  return -1;
                }

                return 0;
              };

              var _step6$value = _slicedToArray(_step6.value, 2),
                parent = _step6$value[0],
                z_values = _step6$value[1];

              if (Object.keys(z_values).length <= 1) {
                continue;
              }

              var children_sorted = _toConsumableArray(parent.children);

              children_sorted.sort(comparator);

              var _iterator7 = _createForOfIteratorHelper(children_sorted),
                _step7;

              try {
                for (_iterator7.s(); !(_step7 = _iterator7.n()).done; ) {
                  var child = _step7.value;
                  parent.appendChild(child);
                }
              } catch (err) {
                _iterator7.e(err);
              } finally {
                _iterator7.f();
              }
            }
          } catch (err) {
            _iterator6.e(err);
          } finally {
            _iterator6.f();
          }
        }

        function autoanim_change_to_screen(current_slug, target_slug, easing, duration) {
          var push_history = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : true;
          var screen_node = document.querySelector(".screen[data-screens]");

          if (screen_node.current_timed_transition) {
            window.clearTimeout(screen_node.current_timed_transition);
            screen_node.current_timed_transition = null;
          }

          var autoanim_data = screen_node.autoanim;
          var new_styles = autoanim_data[target_slug];
          var old_styles = autoanim_data[current_slug];

          if (duration) {
            var per_element_animated_props = new Map();
            var all_elements = new Set(
              [].concat(_toConsumableArray(new_styles.keys()), _toConsumableArray(old_styles.keys()))
            );

            var _iterator8 = _createForOfIteratorHelper(all_elements.values()),
              _step8;

            try {
              for (_iterator8.s(); !(_step8 = _iterator8.n()).done; ) {
                var element = _step8.value;
                var new_element_style = new_styles.get(element);
                var old_element_style = old_styles.get(element);

                if (!new_element_style && !old_element_style) {
                  continue;
                }

                var this_element_animated_props = {};

                var _iterator9 = _createForOfIteratorHelper(autoanimated_properties),
                  _step9;

                try {
                  for (_iterator9.s(); !(_step9 = _iterator9.n()).done; ) {
                    var prop = _step9.value;
                    var new_value =
                      new_element_style === null || new_element_style === void 0 ? void 0 : new_element_style[prop];
                    var old_value =
                      old_element_style === null || old_element_style === void 0 ? void 0 : old_element_style[prop];

                    if (new_value == null && old_value == null) {
                      continue;
                    }

                    if (autoanimated_properties_from_zero.includes(prop)) {
                      new_value = new_value || 0;
                      old_value = old_value || 0;
                    } else {
                      new_value = new_value !== undefined ? new_value : old_value;
                      old_value = old_value !== undefined ? old_value : new_value;
                    }

                    this_element_animated_props[prop] = [old_value, new_value];
                  }
                } catch (err) {
                  _iterator9.e(err);
                } finally {
                  _iterator9.f();
                }

                if (Object.keys(this_element_animated_props).length !== 0) {
                  per_element_animated_props.set(element, this_element_animated_props);
                }
              }
            } catch (err) {
              _iterator8.e(err);
            } finally {
              _iterator8.f();
            }

            var has_reordered = false;
            var root_element = document.querySelector(".screen");
            animate_elements(
              root_element,
              per_element_animated_props,
              {
                duration: duration,
                easing: easing,
              },
              function (element) {
                element.removeAttribute("style");

                if (!has_reordered) {
                  autoanim_reorder_by_z_indexes();
                  has_reordered = true;
                }
              },
              false,
              false
            );
          } else {
            setTimeout(autoanim_reorder_by_z_indexes);
          }

          var screen_element = document.querySelector(".screen");
          var screens_slugs = screen_element.getAttribute("data-screens").split(",");

          var _iterator10 = _createForOfIteratorHelper(screens_slugs),
            _step10;

          try {
            for (_iterator10.s(); !(_step10 = _iterator10.n()).done; ) {
              var slug = _step10.value;
              screen_element.classList.toggle(slug, slug === target_slug);
            }
          } catch (err) {
            _iterator10.e(err);
          } finally {
            _iterator10.f();
          }

          last_set_hash = "#" + target_slug;

          if (history.pushState && current_slug && push_history) {
            history.pushState(null, null, last_set_hash);
          } else if (push_history) {
            location.hash = last_set_hash;
          } else {
            window.location.replace(("" + window.location).split("#")[0] + last_set_hash);
          }

          var timed_transitions = screen_node.getAttribute("data-transitions");

          if (timed_transitions) {
            var _iterator11 = _createForOfIteratorHelper(timed_transitions.split(";")),
              _step11;

            try {
              var _loop3 = function _loop3() {
                var transition = _step11.value;

                var _transition$split = transition.split(","),
                  _transition$split2 = _slicedToArray(_transition$split, 5),
                  transition_from_screen = _transition$split2[0],
                  transition_to_screen = _transition$split2[1],
                  delay = _transition$split2[2],
                  easing = _transition$split2[3],
                  duration_next = _transition$split2[4];

                delay = parseInt(delay, 10);
                easing = decodeURIComponent(easing);

                if (target_slug === transition_from_screen) {
                  if (duration) {
                    delay += duration;
                  }

                  var delayed_exec_cb = function delayed_exec_cb() {
                    screen_node.current_timed_transition = setTimeout(function () {
                      autoanim_change_to_screen(
                        transition_from_screen,
                        transition_to_screen,
                        easing,
                        parseInt(duration_next, 10),
                        false
                      );
                    }, Math.max(delay, 1));
                    window.Lib.imagesLoadedFinished = true;
                  };

                  if (window.Lib.imagesLoadedFinished) {
                    delayed_exec_cb();
                  } else {
                    imagesLoaded(
                      ".screen *",
                      {
                        background: true,
                      },
                      delayed_exec_cb
                    );
                  }

                  return "break";
                }
              };

              for (_iterator11.s(); !(_step11 = _iterator11.n()).done; ) {
                var _ret = _loop3();

                if (_ret === "break") break;
              }
            } catch (err) {
              _iterator11.e(err);
            } finally {
              _iterator11.f();
            }
          }
        }

        function transform_matrix_to_rotation(matrix_str) {
          if (!matrix_str) {
            return 0;
          }

          var split = matrix_str.split(/,|\(/);

          if (!split || split.length !== 7) {
            return 0;
          }

          var a = parseFloat(split[1]);
          var b = parseFloat(split[2]);
          return Math.round(Math.atan2(b, a) * (180 / Math.PI));
        }

        function autoanim_collect_styles(root_element) {
          var css_by_screen = {};
          var screens_slugs = root_element.getAttribute("data-screens").split(",");

          var _iterator12 = _createForOfIteratorHelper(screens_slugs),
            _step12;

          try {
            for (_iterator12.s(); !(_step12 = _iterator12.n()).done; ) {
              var target_slug = _step12.value;

              var _iterator13 = _createForOfIteratorHelper(screens_slugs),
                _step13;

              try {
                for (_iterator13.s(); !(_step13 = _iterator13.n()).done; ) {
                  var slug = _step13.value;
                  root_element.classList.toggle(slug, slug === target_slug);
                }
              } catch (err) {
                _iterator13.e(err);
              } finally {
                _iterator13.f();
              }

              css_by_screen[target_slug] = new Map();

              var _iterator14 = _createForOfIteratorHelper(root_element.querySelectorAll("*")),
                _step14;

              try {
                for (_iterator14.s(); !(_step14 = _iterator14.n()).done; ) {
                  var animated_obj = _step14.value;
                  var computed_style = getComputedStyle(animated_obj);

                  if (computed_style.backgroundImage !== "none") {
                    var pic = new Image();
                    pic.src = computed_style.backgroundImage;
                  }

                  var zindex = parseInt(computed_style.getPropertyValue("--z-index"));

                  if (zindex === -1) {
                    continue;
                  }

                  var autoanim_props = {};

                  var _iterator15 = _createForOfIteratorHelper(autoanimated_properties),
                    _step15;

                  try {
                    for (_iterator15.s(); !(_step15 = _iterator15.n()).done; ) {
                      var prop = _step15.value;
                      var val = computed_style.getPropertyValue(prop);

                      if (prop === "transform") {
                        var rotation = transform_matrix_to_rotation(val);

                        if (rotation) {
                          autoanim_props["rotate"] = rotation;
                        }
                      } else if (val && val !== "none") {
                        autoanim_props[prop] = computed_style.getPropertyValue(prop);
                      }
                    }
                  } catch (err) {
                    _iterator15.e(err);
                  } finally {
                    _iterator15.f();
                  }

                  autoanim_props["--z-index"] = zindex;
                  css_by_screen[target_slug].set(animated_obj, autoanim_props);
                }
              } catch (err) {
                _iterator14.e(err);
              } finally {
                _iterator14.f();
              }
            }
          } catch (err) {
            _iterator12.e(err);
          } finally {
            _iterator12.f();
          }

          root_element.autoanim = css_by_screen;
        }

        function init_timeline_components() {
          run_when_doc_ready(function () {
            var _iterator16 = _createForOfIteratorHelper(document.querySelectorAll(".component-wrapper")),
              _step16;

            try {
              for (_iterator16.s(); !(_step16 = _iterator16.n()).done; ) {
                var element = _step16.value;

                if (element.timeline_data) {
                  timeline_load_initial_values(element.timeline_data);
                }
              }
            } catch (err) {
              _iterator16.e(err);
            } finally {
              _iterator16.f();
            }
          });
        }

        function init_auto_animate() {
          var screen_element = document.querySelector(".screen[data-screens]");

          if (!screen_element) {
            return;
          }

          screen_element.style.opacity = 0;
          run_when_doc_ready(function () {
            var _iterator17 = _createForOfIteratorHelper(document.querySelectorAll(".hidden")),
              _step17;

            try {
              for (_iterator17.s(); !(_step17 = _iterator17.n()).done; ) {
                var element = _step17.value;
                element.classList.remove("hidden");
              }
            } catch (err) {
              _iterator17.e(err);
            } finally {
              _iterator17.f();
            }

            var screen_element = document.querySelector(".screen[data-screens]");
            screen_element.style.opacity = 1;

            if (screen_element) {
              var initial_screen = autoanim_get_current_view()[1];
              autoanim_collect_styles(screen_element);
              autoanim_change_to_screen(null, initial_screen);

              window.onhashchange = function () {
                if (last_set_hash !== location.hash) {
                  autoanim_change_to_screen(null, autoanim_get_current_view()[1]);
                }
              };
            }
          });
        }

        window.Lib = {
          autoanim_redirect: autoanim_redirect,
        };
        setTimeout(init_timeline_components, 0);
        setTimeout(init_auto_animate, 0);
      })();
    </script>
  </body>
</html>
