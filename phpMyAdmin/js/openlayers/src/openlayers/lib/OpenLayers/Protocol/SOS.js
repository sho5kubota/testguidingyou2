/* Copyright (c) 2006-2010 by OpenLayers Contributors (see authors.txt for 
 * full list of contributors). Published under the Clear BSD license.  
 * See http://svn.openlayers.org/trunk/openlayers/license.txt for the
 * full text of the license. */

/**
 * @requires OpenLayers/Protocol.js
 */

/**
 * Function: OpenLayers.Protocol.SOS
 * Used to create a versioned SOS protocol.  Default version is 1.0.0.
 *
 * Returns:
 * {<OpenLayers.Protocol>} An SOS protocol for the given version.
 */
OpenLayers.Protocol.SOS = function(options) {
    options = OpenLayers.Util.applyDefaults(
        options, OpenLayers.Protocol.SOS.DEFAULTS
    );
    var cls = OpenLayers.Protocol.SOS["v"+options.version.replace(/\./g, "_")];
    if(!cls) {
        throw "Unsupported SOS version: " + options.version;
    }
    return new cls(options);
};

/**
 * Constant: OpenLayers.Protocol.SOS.DEFAULTS
 */
OpenLayers.Protocol.SOS.DEFAULTS = {
    "version": "1.0.0"
};
