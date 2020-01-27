const pokeLists = require("../data/lists.js");

// Not Founds
exports.pkmnNotFound = "```The Pokémon requested was either not found or not available in current dens.```";
exports.ballNotFound = "```The ball requested was not found.```";
exports.commandNotFound = "```The requested command was not found.```";
exports.argNotFound = "```Arguments not found!\n";
exports.permNotFound = "you do not have the permissions to use this command.";
exports.roleNotFound = "```The requested role was not found. Only Shiny Raid Pings and Giveaway Pings may be pinged.```";
exports.guildNotFound = "```The requested guild was not found.```";
exports.formNotFound = "```The form requested for this Pokémon doesn't exist.```";
exports.gmaxNotFound = "```This Pokémon does not have a Gigantamax form!```";
exports.guildConfNotFound = "Guild configuration not found.";

// User Help Messages
exports.pingableRoles = "Only Shiny Raid Pings and Giveaway Pings may be pinged.";
exports.disclaimerMsg = "*Assuming ball specific conditions have been met!*";
exports.noRaidEff = "(No effect on raids)";
exports.requiredPrefix = "Please enter a Non-Alphanumeric prefix to be used with the bot.";
exports.configReset = "The Guild Configurations for this server have been reset.";

// No Arg Calls -> May format with command structure
exports.pingNoArg = "```Please enter a role to ping.```";
exports.catchNoArg = "```Please enter a Pokémon to catch followed by a ball of your choice.```";
exports.denNoArg = "```Please enter either a Den Number or a Pokemon to fetch.```";
exports.reloadNoArg = "```Please enter a command to reload.```";
exports.setconfNoArg = "Please enter a configuration property to set followed by the desired setting.";


// Help Commands
exports.nonAdminCommands = "%help";
exports.adminCommands = "%help\n%ping [shiny | giveaway]";
exports.pokeCommands = "%den [Den Number | Pokémon Name]\n%catch [Pokémon Name]-(Form Name) (Ball Name)\nForm Names Include -gmax, -galar, -alola, etc.";
exports.commandDescription = "[ ] Indicate required fields.\n( ) Indicate optional fields.";

// Example Commands
exports.catchExample2 = "%catch gengar (ball/gmax)";
exports.catchExample3 = "%catch gengar (ball) (gmax)";

/*
exports.errHandler = (flag, args) => {
  if (flag == "notFounds")
  {
    let msg = "";
    args.forEach()
  } 
}
*/