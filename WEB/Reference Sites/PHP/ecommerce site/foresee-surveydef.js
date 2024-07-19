ForeSee.surveydefs = [{
    name: 'payless-browse',
    invite: {
        when: 'onentry'
    },
    pop: {
        when: 'now'
    },
    sp: 2.1,
    lf: 5, /* Changed from 10 per Jeff Schutte request, 12/4/2009. Wesley Blue*/
    include: {
        urls: ['.']
    }
}];ForeSee.properties = {
    repeatdays: 90,
    
    language: {
        src: 'location',
        locales: [{
            match: '.',
            locale: 'en'
        }]
    },
    
    exclude: {
        local: [],
        referer: []
    },
    
    invite: {
        url: 'invite.html',
        width: '500',
        bgcolor: '#333',
        opacity: 0.7,
        x: 'center',
        y: 'center',
        delay: 0,
        accept: 'Continue',
        decline: 'No thanks',
        hideOnClick: false
    },
    
    tracker: {
        width: '500',
        height: '325',
        timeout: 3,
        url: 'tracker.html'
    },
    
    survey: {
        width: 470,
        height: 600,
        loading: false
    },
    
    qualifier: {
        location: 'local',
        width: '500',
        height: '300'
    },
    
    loading: {
        url: 'survey_loading.html'
    },
    
    pop: {
        what: 'survey',
        after: 'leaving-site',
        pu: false,
        tracker: true
    },
    
    mode: 'first-party'
};
